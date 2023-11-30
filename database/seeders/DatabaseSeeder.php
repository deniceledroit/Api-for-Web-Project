<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Booking;
use App\Models\BookingType;
use App\Models\Car;
use App\Models\Controle;
use App\Models\Customer;
use App\Models\Dammage;
use App\Models\DammageType;
use App\Models\Role;
use Database\Factories\CarFactory;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $list_label=['Aile AV G','Aile AR G','Aile AV D','Aile AR D','Calandre','Phare AV G', 'Phare AV D','Siege cond','Siege pass','Porte AV G', 'Porte AV D','Tableau de b','Phare AR G','Phare AR D','Porte AR G','Porte AR D'];
        $list_type=['RS','RP','EC'];
        // \App\Models\User::factory(10)->create();
        Role::factory()->create([
            'label'=>'client-booker'
        ]);
        Role::factory()->create([
            'label'=>'client-admin'
        ]);
        Role::factory()->create([
            'label'=>'seven-agent'
        ]);
        Role::factory()->create([
            'label'=>'seven-admin'
        ]);
        Role::factory()->create([
            'label'=>'seven-controller'
        ]);
        \App\Models\User::factory(6)->create();
        Car::factory(10)->create();
        Customer::factory(10)->create();
        Controle::factory(20)->create();
        for($i=0;$i<=2;$i++){
            DammageType::factory()->create([
                'label'=>$list_type[$i]
            ]);
        }
        for($i=0;$i<=15;$i++){
            Dammage::factory()->create([
                'label'=>$list_label[$i]
            ]);
        }
        BookingType::factory()->create([
            'label'=>'RoundTrip'
        ]);
        BookingType::factory()->create([
            'label'=>'Simple'
        ]);
        Booking::factory(10)->create();
    }
}
