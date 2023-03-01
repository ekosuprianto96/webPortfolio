<?php

namespace App\Charts;

use App\Models\PenggunaWeb;
use App\Models\Visitor;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;
use Spatie\Analytics\AnalyticsClientFactory;

class AnalystChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $month1 = Carbon::now()->addMonth(-1)->format('M');
        $month2 = Carbon::now()->addMonth(-2)->format('M');
        $month3 = Carbon::now()->addMonth(-3)->format('M');
        $month4 = Carbon::now()->addMonth(-4)->format('M');
        $month5 = Carbon::now()->addMonth(-5)->format('M');
        $month0 = Carbon::now()->format('M');
        $dataVisitor = Visitor::whereMonth('created_at', Carbon::now()->format('m'))->get();

        // dd($dataVisitor->count());
        return $this->chart->barChart()
            ->setTitle('Analysis Website.')
            ->setSubtitle('Tampilan Data Pengunjung Dan Pengguna.')
            ->addData('Pengunjung', [
                Visitor::whereMonth('created_at', Carbon::now()->addMonth(-5)->format('m'))->get()->count(),
                Visitor::whereMonth('created_at', Carbon::now()->addMonth(-4)->format('m'))->get()->count(),
                Visitor::whereMonth('created_at', Carbon::now()->addMonth(-3)->format('m'))->get()->count(),
                Visitor::whereMonth('created_at', Carbon::now()->addMonth(-2)->format('m'))->get()->count(),
                Visitor::whereMonth('created_at', Carbon::now()->addMonth(-1)->format('m'))->get()->count(),
                Visitor::whereMonth('created_at', Carbon::now()->format('m'))->get()->count()
            ])
            ->addData('Pengguna', [
                PenggunaWeb::whereMonth('created_at', Carbon::now()->addMonth(-5)->format('m'))->get()->count(),
                PenggunaWeb::whereMonth('created_at', Carbon::now()->addMonth(-4)->format('m'))->get()->count(),
                PenggunaWeb::whereMonth('created_at', Carbon::now()->addMonth(-3)->format('m'))->get()->count(),
                PenggunaWeb::whereMonth('created_at', Carbon::now()->addMonth(-2)->format('m'))->get()->count(),
                PenggunaWeb::whereMonth('created_at', Carbon::now()->addMonth(-1)->format('m'))->get()->count(),
                PenggunaWeb::whereMonth('created_at', Carbon::now()->format('m'))->get()->count()
            ])
            ->setXAxis([$month5, $month4, $month3, $month2, $month1, $month0]);
    }
}
