<?php

namespace App\Exports;

use App\Site;
use App\Exports\SitesData;
use App\Exports\ServicesData;
use App\Exports\NetworksData;
use App\Exports\UsersData;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\Exportable;




class SitesExport implements  WithMultipleSheets
{
    use Exportable;

    public function __construct(int $id)
    {
        $this->id = $id;
        // dd($this->id);
    }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];

       
        $sheets[] = new SitesData($this->id);
        $sheets[] = new ServicesData($this->id);
        $sheets[] = new NetworksData($this->id);
        $sheets[] = new UsersData($this->id);
         

        return $sheets;
    }
    
}
