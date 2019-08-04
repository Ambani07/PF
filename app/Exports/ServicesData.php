<?php

namespace App\Exports;
use App\Site;
use App\Service;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class ServicesData implements FromQuery, WithTitle, WithEvents, WithHeadings, WithMapping, WithColumnFormatting
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
                $event->sheet->getStyle('A1:E1')->applyFromArray($styleArray);
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
            $site->service->id,
            $site->service->type_of_service,
            $site->service->cover_period,
            $site->service->service_class,
            Date::dateTimeToExcel($site->service->created_at),
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
        return 'Service';
    }

    public function headings(): array
    {
        return [
            '#',
            'Service Type',
            'Cover Period',
            'Service Class',
            'Created At'
        ];
    }

     /**
     * @return array
     */
    public function columnFormats(): array
    {
        return [
            'E' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}