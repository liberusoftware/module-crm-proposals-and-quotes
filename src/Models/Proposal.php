<?php

declare(strict_types=1);

namespace Liberu\CRM\ProposalsAndQuotes\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 */
final class Proposal extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_proposals';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['total' => 'float', 'expires_at' => 'date'];
    }
}
