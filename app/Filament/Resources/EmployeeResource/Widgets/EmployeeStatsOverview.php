<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {

        $in = Country::where('country_code', 'IN')->withCount('employees')->first();
        $jp = Country::where('country_code', 'JP')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make('INDIA Employee', $in ? $in->employees_count : 0),
            Card::make('JAPAN Employee', $jp ? $jp->employees_count : 0),

        ];
    }
}
