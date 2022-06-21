<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VirtualMachine;
use App\Events\SearchEvent;

class VirtualMachineController extends Controller
{
    public function search(Request $request)
        {
            $vm = VirtualMachine::get();
            foreach ($vm as $key => $value) {
            }
            $query = ([
                $value->HDD_Size,
                $value->CPU_Size,
                $value->RAM_Size
            ]);

            $query = $request->query('query');
            if ($request->has('RAM')) {
                if ($request->has('CPU')) {
                    if ($request->has('HDD')) {
                        $vm = VirtualMachine::where('CPU_Size','=', 'CPU')
                ->where('RAM_Size','=', 'RAM')
                ->where('HDD_Size','=', 'HDD')
                ->get('id');

                return $vm;
                    }
                }
            }
            // here all the requests too and scompare them to the resources available in my datacenter

            // 1. if new request less than the avilable resources => checking for HDD, RAM and CPU size add it to result
            // 2. if datacenter resources get filled up or incoming requests don't fit in anymore after trying for three more, return null and
            // send notification that the datacenter cannot take in any more request.
            // 3. return the results id that must already hav the number of accepted requests and return result.

            // NB: everything has been seeded and randomised to make requests including viryual machines to be hosted with their varied resources.


            //broadcast search results with Pusher channels

        }
}
