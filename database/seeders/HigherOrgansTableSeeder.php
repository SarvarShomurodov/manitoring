<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HigherOrgansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('higher_organs')->insert([
            [
                'name' => 'Economic Policy Review',
                'who_given_id' => 1,
                'date' => Carbon::parse('2024-11-10'),
                'ass_number' => 123,
                'who_send' => 'Ministry of Finance',
                'letter_date' => Carbon::parse('2024-11-01'),
                'letter_number' => 456,
                'direction' => 'Financial Analysis',
                'sorov' => 'Quarterly Report',
                'regions_id' => 1,
                'quarters_id' => 1,
            ],
            [
                'name' => 'Market Stability Report',
                'who_given_id' => 6,
                'date' => Carbon::parse('2024-11-15'),
                'ass_number' => 124,
                'who_send' => 'Central Bank',
                'letter_date' => Carbon::parse('2024-11-05'),
                'letter_number' => 457,
                'direction' => 'Economic Stability',
                'sorov' => 'Annual Analysis',
                'regions_id' => 2,
                'quarters_id' => 1,
            ],
            [
                'name' => 'Employment Data Update',
                'who_given_id' => 7,
                'date' => Carbon::parse('2024-11-20'),
                'ass_number' => 125,
                'who_send' => 'Labor Department',
                'letter_date' => Carbon::parse('2024-11-10'),
                'letter_number' => 458,
                'direction' => 'Labor Market',
                'sorov' => 'Monthly Review',
                'regions_id' => 3,
                'quarters_id' => 2,
            ],
            [
                'name' => 'Inflation Report',
                'who_given_id' => 4,
                'date' => Carbon::parse('2024-11-25'),
                'ass_number' => 126,
                'who_send' => 'Central Bank',
                'letter_date' => Carbon::parse('2024-11-15'),
                'letter_number' => 459,
                'direction' => 'Price Stability',
                'sorov' => 'Monthly Inflation Data',
                'regions_id' => 4,
                'quarters_id' => 2,
            ],
            [
                'name' => 'Fiscal Year Report',
                'who_given_id' => 1,
                'date' => Carbon::parse('2025-01-01'),
                'ass_number' => 127,
                'who_send' => 'Ministry of Finance',
                'letter_date' => Carbon::parse('2024-12-30'),
                'letter_number' => 460,
                'direction' => 'Fiscal Management',
                'sorov' => 'Yearly Overview',
                'regions_id' => 11,
                'quarters_id' => 3,
            ],
            [
                'name' => 'Economic Growth Data',
                'who_given_id' => 8,
                'date' => Carbon::parse('2025-02-01'),
                'ass_number' => 128,
                'who_send' => 'Statistics Department',
                'letter_date' => Carbon::parse('2025-01-28'),
                'letter_number' => 461,
                'direction' => 'Growth Analysis',
                'sorov' => 'Quarterly Growth Report',
                'regions_id' => 10,
                'quarters_id' => 3,
            ],
            [
                'name' => 'Labor Market Analysis',
                'who_given_id' => 3,
                'date' => Carbon::parse('2025-02-10'),
                'ass_number' => 129,
                'who_send' => 'Labor Department',
                'letter_date' => Carbon::parse('2025-02-05'),
                'letter_number' => 462,
                'direction' => 'Employment Trends',
                'sorov' => 'Employment Data Review',
                'regions_id' => 3,
                'quarters_id' => 4,
            ],
            [
                'name' => 'Trade Balance Report',
                'who_given_id' => 4,
                'date' => Carbon::parse('2025-03-15'),
                'ass_number' => 130,
                'who_send' => 'Trade Ministry',
                'letter_date' => Carbon::parse('2025-03-10'),
                'letter_number' => 463,
                'direction' => 'Foreign Trade',
                'sorov' => 'Quarterly Trade Data',
                'regions_id' => 4,
                'quarters_id' => 4,
            ],
            [
                'name' => 'Public Spending Review',
                'who_given_id' => 1,
                'date' => Carbon::parse('2025-04-01'),
                'ass_number' => 131,
                'who_send' => 'Finance Ministry',
                'letter_date' => Carbon::parse('2025-03-28'),
                'letter_number' => 464,
                'direction' => 'Budget Analysis',
                'sorov' => 'Annual Spending Review',
                'regions_id' => 1,
                'quarters_id' => 1,
            ],
            [
                'name' => 'Industrial Output Update',
                'who_given_id' => 2,
                'date' => Carbon::parse('2025-04-20'),
                'ass_number' => 132,
                'who_send' => 'Industry Ministry',
                'letter_date' => Carbon::parse('2025-04-15'),
                'letter_number' => 465,
                'direction' => 'Industrial Growth',
                'sorov' => 'Monthly Output Data',
                'regions_id' => 2,
                'quarters_id' => 1,
            ],
            [
                'name' => 'Industrial Output Update',
                'who_given_id' => 6,
                'date' => Carbon::parse('2025-04-20'),
                'ass_number' => 132,
                'who_send' => 'Industry Ministry',
                'letter_date' => Carbon::parse('2025-04-15'),
                'letter_number' => 465,
                'direction' => 'Industrial Growth',
                'sorov' => 'Monthly Output Data',
                'regions_id' => 4,
                'quarters_id' => 2,
            ],
            [
                'name' => 'Industrial Output Update',
                'who_given_id' => 7,
                'date' => Carbon::parse('2025-04-20'),
                'ass_number' => 132,
                'who_send' => 'Industry Ministry',
                'letter_date' => Carbon::parse('2025-04-15'),
                'letter_number' => 465,
                'direction' => 'Industrial Growth',
                'sorov' => 'Monthly Output Data',
                'regions_id' => 10,
                'quarters_id' => 3,
            ],
            [
                'name' => 'Industrial Output Update',
                'who_given_id' => 8,
                'date' => Carbon::parse('2025-04-20'),
                'ass_number' => 132,
                'who_send' => 'Industry Ministry',
                'letter_date' => Carbon::parse('2025-04-15'),
                'letter_number' => 465,
                'direction' => 'Industrial Growth',
                'sorov' => 'Monthly Output Data',
                'regions_id' => 5,
                'quarters_id' => 1,
            ],
            [
                'name' => 'Industrial Output Update',
                'who_given_id' => 8,
                'date' => Carbon::parse('2025-04-20'),
                'ass_number' => 132,
                'who_send' => 'Industry Ministry',
                'letter_date' => Carbon::parse('2025-04-15'),
                'letter_number' => 465,
                'direction' => 'Industrial Growth',
                'sorov' => 'Monthly Output Data',
                'regions_id' => 2,
                'quarters_id' => 4,
            ],
        ]);
    }
}