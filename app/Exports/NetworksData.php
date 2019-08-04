<?php

namespace App\Exports;
use App\Site;
use App\Network;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class NetworksData implements FromQuery, WithTitle, WithEvents, WithHeadings, WithMapping, WithColumnFormatting
{
    public function __construct(int $id)
    {
        $this->id = $id;
        // dd($this->id);
    }
    /**
     * @return array
     */
    public function registerEvents(): array
    {
        $styleArray = [
                        'font' => [
                            'bold' => true,
                            'color' => [
                                'argb' => 'FFFFFF',
                            ]
                        ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'color' => [
                                'argb' => '228838',
                            ]
                        ],
                    ];
        return [
            // Handle by a closure.
            AfterSheet::class => function(AfterSheet $event) use ($styleArray) {
                $event->sheet->getStyle('A1:Q1')->applyFromArray($styleArray);
                $event->sheet->getDefaultRowDimension()->setRowHeight(20);
                

                $cellIterator = $event->sheet->getRowIterator()->current()->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(true);

                foreach ($cellIterator as $cell) {
                    $event->sheet->getColumnDimension($cell->getColumn())->setAutoSize(true);
                    $event->sheet->getStyle($cell->getRow())->getAlignment()->setWrapText(true);
                }
            },

        ];
    }
    /**
    * @var Sites $site
    */
    public function map($site): array
    {
        return [
            $site->network->id,
            $site->network->circuit_no,
            $site->network->ntu,
            $site->network->ntu_name,
            $site->network->physical_interface,
            $site->network->encapsulation,
            $site->network->customer_facing_port,
            $site->network->customer_vlan,
            $site->network->ntu_ip_address,
            $site->network->link_subnet,
            $site->network->gateway_address,
            $site->network->bandwidth,
            $site->network->me_access_type,
            $site->network->me_access_no,
            $site->network->me_node,
            $site->network->me_port,
            Date::dateTimeToExcel($site->network->created_at),
        ];
    }

    /**
     * @return Builder
     */
    public function query()
    {
        $site =  Site::where('id',$this->id);

        // dd($site->customer->name);
        return $site;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Network';
    }

    public function headings(): array
    {
        return [
            '#',
            'Circuit Number',
            'NTU',
            'NTU Name',
            'Physical Interface',
            'Encapsulation',
            'Customer Facing Port',
            'Customer VLAN',
            'NTU IP Address',
            'Link Subnet',
            'Gateway Address',
            'Bandwidth',
            'ME Access Type',
            'ME Access Number',
            'ME Node',
            'ME Port',
            'Created At'
        ];
    }

     /**
     * @return array
     */
    public function columnFormats(): array
    {
        return [
            'Q' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}