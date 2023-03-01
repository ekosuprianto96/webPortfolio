<?php

namespace App\Http\Controllers;

use App\Charts\AnalystChart;
use App\Models\DataWebsite;
use App\Models\PenggunaWeb;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;
use Spatie\Analytics\AnalyticsClientFactory;
use Illuminate\Support\Str;

class AnalitycController extends Controller
{
    public function index(AnalystChart $chart, Request $request)
    {
        $visitors = Visitor::latest()->paginate(5);
        $month = explode('-', $request->month);
        if (isset($request->month)) {
            $visitors = Visitor::whereMonth('created_at', $month[1])->paginate(5);
        }
        return view('analitycsWebsite', [
            'chart' => $chart->build(),
            'visitors' => $visitors,
            'active' => 'Analitycs Website'
        ]);
    }
    public function getDataAnalist()
    {
        $viewId = config('analytics');
        $client = AnalyticsClientFactory::createForConfig($viewId);
        $analytics = new Analytics($client, $viewId['view_id']);
        $analyticsData = $analytics->fetchTotalVisitorsAndPageViews(Period::years(1));

        return response()->json(json_decode($analyticsData), 200);
    }
    public function setDataVisitor(Request $request)
    {
        // return $request->all();
        $data_website = DataWebsite::get()->first();
        $visitors = new Visitor();
        $uuid = Str::uuid();
        $uuidVistor = null;
        $data_website->page_view += 1;
        if ($request->is_user === 'true') {
            $data_website->visitor_count += 1;
            $visitors->uuid = $uuid;
            PenggunaWeb::create([
                'visitor_uuid' => $uuid
            ]);
            $uuidVistor = $uuid;
        } else {
            $vsitorsData = Visitor::where('uuid', $request->uuid_visitor)->get();
            $visitors->uuid = $vsitorsData[0]->uuid;
        }
        $visitors->device = $request->device;
        $visitors->save();
        $data_website->save();

        return response()->json([
            'message' => true,
            'uuid_visitor' => $uuidVistor
        ], 200);
    }
}
