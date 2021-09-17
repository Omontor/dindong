<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;
    use MultiTenantModelTrait;
    use Auditable;
    use HasFactory;

    public $table = 'invoices';

    protected $dates = [
        'created_at',
        'emision',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'user_data_id',
        'name_id',
        'emision',
        'total_letter',
        'paid_form_id',
        'payment_method_id',
        'cfdi_use_id',
        'currency_id',
        'taxes_id',
        'type_voucher_id',
        'folio',
        'serie_id',
        'status',
        'created_by_id',
        'updated_at',
        'deleted_at',
    ];

    public function user_data()
    {
        return $this->belongsTo(UserInfo::class, 'user_data_id');
    }

    public function name()
    {
        return $this->belongsTo(Client::class, 'name_id');
    }

    public function getEmisionAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmisionAttribute($value)
    {
        $this->attributes['emision'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function paid_form()
    {
        return $this->belongsTo(PaymentForm::class, 'paid_form_id');
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    public function cfdi_use()
    {
        return $this->belongsTo(TaxUse::class, 'cfdi_use_id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function taxes()
    {
        return $this->belongsTo(Tax::class, 'taxes_id');
    }

    public function type_voucher()
    {
        return $this->belongsTo(RelatedVoucher::class, 'type_voucher_id');
    }

    public function serie()
    {
        return $this->belongsTo(InvoiceSerie::class, 'serie_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
