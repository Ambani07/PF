<?php

namespace App\Exports;
use App\Site;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class SitesData implements FromQuery, WithTitle, WithEvents, WithHeadings, WithMapping, WithColumnFormatting
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
                $event->sheet->getStyle('A1:M1')->applyFromArray($styleArray);
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
            $site->id,
            $site->category->name,
            $site->name,
            $site->street,
            $site->suburb,
            $site->city,
            $site->region_name,
            $site->customer->name,
            $site->customer->contactPerson,
            $site->customer->contactPersonPhone,
            $site->customer->contactPersonCell,
            $site->customer->contactPersonEmail,
            Date::dateTimeToExcel($site->created_at),
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
        return 'Site';
    }

    public function headings(): array
    {
        return [
            '#',
            'Product',
            'Site Name',
            'Street',
            'Suburb',
            'City',
            'Region',
            'Customer Name',
            'Contact Person',
            'Contact Person Phone',
            'Contact Person Cell',
            'Contact Person Email',
            'Created At'
        ];
    }

     /**
     * @return array
     */
    public function columnFormats(): array
    {
        return [
            'M' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}