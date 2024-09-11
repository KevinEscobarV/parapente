<?php

namespace App\Enums;

enum FlightStatus: string
{
    case Pending = 'pending';
    case Scheduled = 'scheduled';
    case Rescheduled = 'rescheduled';
    case Done = 'done';
    case Cancelled = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Pendiente',
            self::Scheduled => 'Programado',
            self::Rescheduled => 'Reprogramado',
            self::Done => 'Realizado',
            self::Cancelled => 'Cancelado',
        };
    }

    public static function select(): array
    {
        return collect(self::cases())->map(function ($case) {
            return [
                'value' => $case,
                'label'=> $case->label(),
            ];
        })->toArray();
    }
}