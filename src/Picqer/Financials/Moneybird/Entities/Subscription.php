<?php

namespace Picqer\Financials\Moneybird\Entities;

use Picqer\Financials\Moneybird\Actions\Filterable;
use Picqer\Financials\Moneybird\Actions\FindAll;
use Picqer\Financials\Moneybird\Actions\FindOne;
use Picqer\Financials\Moneybird\Actions\Removable;
use Picqer\Financials\Moneybird\Actions\Storable;
use Picqer\Financials\Moneybird\Model;

/**
 * Class Subscription.
 *
 * @property string $id
 */
class Subscription extends Model
{
    use FindAll, FindOne, Storable, Removable, Filterable;

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'start_date',
        'product_id',
        'contact_id',
        'end_date',
        'reference',
        'document_style_id',
        'frequency',
        'frequency_type',
    ];

    /**
     * @var string
     */
    protected $endpoint = 'subscriptions';

    /**
     * @var string
     */
    protected $namespace = 'subscription';
}
