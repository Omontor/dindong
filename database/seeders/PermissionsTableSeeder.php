<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'facturacion_access',
            ],
            [
                'id'    => 18,
                'title' => 'blog_create',
            ],
            [
                'id'    => 19,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 20,
                'title' => 'blog_show',
            ],
            [
                'id'    => 21,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 22,
                'title' => 'blog_access',
            ],
            [
                'id'    => 23,
                'title' => 'comunicacion_access',
            ],
            [
                'id'    => 24,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 25,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 26,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 27,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 28,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 29,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 30,
                'title' => 'datos_de_facturacion_access',
            ],
            [
                'id'    => 31,
                'title' => 'configuracion_access',
            ],
            [
                'id'    => 32,
                'title' => 'bank_create',
            ],
            [
                'id'    => 33,
                'title' => 'bank_edit',
            ],
            [
                'id'    => 34,
                'title' => 'bank_show',
            ],
            [
                'id'    => 35,
                'title' => 'bank_delete',
            ],
            [
                'id'    => 36,
                'title' => 'bank_access',
            ],
            [
                'id'    => 37,
                'title' => 'massive_mail_create',
            ],
            [
                'id'    => 38,
                'title' => 'massive_mail_edit',
            ],
            [
                'id'    => 39,
                'title' => 'massive_mail_show',
            ],
            [
                'id'    => 40,
                'title' => 'massive_mail_delete',
            ],
            [
                'id'    => 41,
                'title' => 'massive_mail_access',
            ],
            [
                'id'    => 42,
                'title' => 'user_info_create',
            ],
            [
                'id'    => 43,
                'title' => 'user_info_edit',
            ],
            [
                'id'    => 44,
                'title' => 'user_info_show',
            ],
            [
                'id'    => 45,
                'title' => 'user_info_delete',
            ],
            [
                'id'    => 46,
                'title' => 'user_info_access',
            ],
            [
                'id'    => 47,
                'title' => 'catalog_access',
            ],
            [
                'id'    => 48,
                'title' => 'geo_access',
            ],
            [
                'id'    => 49,
                'title' => 'state_create',
            ],
            [
                'id'    => 50,
                'title' => 'state_edit',
            ],
            [
                'id'    => 51,
                'title' => 'state_show',
            ],
            [
                'id'    => 52,
                'title' => 'state_delete',
            ],
            [
                'id'    => 53,
                'title' => 'state_access',
            ],
            [
                'id'    => 54,
                'title' => 'municipality_create',
            ],
            [
                'id'    => 55,
                'title' => 'municipality_edit',
            ],
            [
                'id'    => 56,
                'title' => 'municipality_show',
            ],
            [
                'id'    => 57,
                'title' => 'municipality_delete',
            ],
            [
                'id'    => 58,
                'title' => 'municipality_access',
            ],
            [
                'id'    => 59,
                'title' => 'sat_access',
            ],
            [
                'id'    => 60,
                'title' => 'fiscal_regime_create',
            ],
            [
                'id'    => 61,
                'title' => 'fiscal_regime_edit',
            ],
            [
                'id'    => 62,
                'title' => 'fiscal_regime_show',
            ],
            [
                'id'    => 63,
                'title' => 'fiscal_regime_delete',
            ],
            [
                'id'    => 64,
                'title' => 'fiscal_regime_access',
            ],
            [
                'id'    => 65,
                'title' => 'tax_create',
            ],
            [
                'id'    => 66,
                'title' => 'tax_edit',
            ],
            [
                'id'    => 67,
                'title' => 'tax_show',
            ],
            [
                'id'    => 68,
                'title' => 'tax_delete',
            ],
            [
                'id'    => 69,
                'title' => 'tax_access',
            ],
            [
                'id'    => 70,
                'title' => 'tax_use_create',
            ],
            [
                'id'    => 71,
                'title' => 'tax_use_edit',
            ],
            [
                'id'    => 72,
                'title' => 'tax_use_show',
            ],
            [
                'id'    => 73,
                'title' => 'tax_use_delete',
            ],
            [
                'id'    => 74,
                'title' => 'tax_use_access',
            ],
            [
                'id'    => 75,
                'title' => 'country_create',
            ],
            [
                'id'    => 76,
                'title' => 'country_edit',
            ],
            [
                'id'    => 77,
                'title' => 'country_show',
            ],
            [
                'id'    => 78,
                'title' => 'country_delete',
            ],
            [
                'id'    => 79,
                'title' => 'country_access',
            ],
            [
                'id'    => 80,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 81,
                'title' => 'client_create',
            ],
            [
                'id'    => 82,
                'title' => 'client_edit',
            ],
            [
                'id'    => 83,
                'title' => 'client_show',
            ],
            [
                'id'    => 84,
                'title' => 'client_delete',
            ],
            [
                'id'    => 85,
                'title' => 'client_access',
            ],
            [
                'id'    => 86,
                'title' => 'quote_create',
            ],
            [
                'id'    => 87,
                'title' => 'quote_edit',
            ],
            [
                'id'    => 88,
                'title' => 'quote_show',
            ],
            [
                'id'    => 89,
                'title' => 'quote_delete',
            ],
            [
                'id'    => 90,
                'title' => 'quote_access',
            ],
            [
                'id'    => 91,
                'title' => 'invoice_create',
            ],
            [
                'id'    => 92,
                'title' => 'invoice_edit',
            ],
            [
                'id'    => 93,
                'title' => 'invoice_show',
            ],
            [
                'id'    => 94,
                'title' => 'invoice_delete',
            ],
            [
                'id'    => 95,
                'title' => 'invoice_access',
            ],
            [
                'id'    => 96,
                'title' => 'currency_create',
            ],
            [
                'id'    => 97,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 98,
                'title' => 'currency_show',
            ],
            [
                'id'    => 99,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 100,
                'title' => 'currency_access',
            ],
            [
                'id'    => 101,
                'title' => 'product_code_create',
            ],
            [
                'id'    => 102,
                'title' => 'product_code_edit',
            ],
            [
                'id'    => 103,
                'title' => 'product_code_show',
            ],
            [
                'id'    => 104,
                'title' => 'product_code_delete',
            ],
            [
                'id'    => 105,
                'title' => 'product_code_access',
            ],
            [
                'id'    => 106,
                'title' => 'unid_code_create',
            ],
            [
                'id'    => 107,
                'title' => 'unid_code_edit',
            ],
            [
                'id'    => 108,
                'title' => 'unid_code_show',
            ],
            [
                'id'    => 109,
                'title' => 'unid_code_delete',
            ],
            [
                'id'    => 110,
                'title' => 'unid_code_access',
            ],
            [
                'id'    => 111,
                'title' => 'payment_method_create',
            ],
            [
                'id'    => 112,
                'title' => 'payment_method_edit',
            ],
            [
                'id'    => 113,
                'title' => 'payment_method_show',
            ],
            [
                'id'    => 114,
                'title' => 'payment_method_delete',
            ],
            [
                'id'    => 115,
                'title' => 'payment_method_access',
            ],
            [
                'id'    => 116,
                'title' => 'payment_form_create',
            ],
            [
                'id'    => 117,
                'title' => 'payment_form_edit',
            ],
            [
                'id'    => 118,
                'title' => 'payment_form_show',
            ],
            [
                'id'    => 119,
                'title' => 'payment_form_delete',
            ],
            [
                'id'    => 120,
                'title' => 'payment_form_access',
            ],
            [
                'id'    => 121,
                'title' => 'related_voucher_create',
            ],
            [
                'id'    => 122,
                'title' => 'related_voucher_edit',
            ],
            [
                'id'    => 123,
                'title' => 'related_voucher_show',
            ],
            [
                'id'    => 124,
                'title' => 'related_voucher_delete',
            ],
            [
                'id'    => 125,
                'title' => 'related_voucher_access',
            ],
            [
                'id'    => 126,
                'title' => 'product_control_access',
            ],
            [
                'id'    => 127,
                'title' => 'product_create',
            ],
            [
                'id'    => 128,
                'title' => 'product_edit',
            ],
            [
                'id'    => 129,
                'title' => 'product_show',
            ],
            [
                'id'    => 130,
                'title' => 'product_delete',
            ],
            [
                'id'    => 131,
                'title' => 'product_access',
            ],
            [
                'id'    => 132,
                'title' => 'product_unit_create',
            ],
            [
                'id'    => 133,
                'title' => 'product_unit_edit',
            ],
            [
                'id'    => 134,
                'title' => 'product_unit_show',
            ],
            [
                'id'    => 135,
                'title' => 'product_unit_delete',
            ],
            [
                'id'    => 136,
                'title' => 'product_unit_access',
            ],
            [
                'id'    => 137,
                'title' => 'mail_chimp_create',
            ],
            [
                'id'    => 138,
                'title' => 'mail_chimp_edit',
            ],
            [
                'id'    => 139,
                'title' => 'mail_chimp_show',
            ],
            [
                'id'    => 140,
                'title' => 'mail_chimp_delete',
            ],
            [
                'id'    => 141,
                'title' => 'mail_chimp_access',
            ],
            [
                'id'    => 142,
                'title' => 'google_create',
            ],
            [
                'id'    => 143,
                'title' => 'google_edit',
            ],
            [
                'id'    => 144,
                'title' => 'google_show',
            ],
            [
                'id'    => 145,
                'title' => 'google_delete',
            ],
            [
                'id'    => 146,
                'title' => 'google_access',
            ],
            [
                'id'    => 147,
                'title' => 'paypal_create',
            ],
            [
                'id'    => 148,
                'title' => 'paypal_edit',
            ],
            [
                'id'    => 149,
                'title' => 'paypal_show',
            ],
            [
                'id'    => 150,
                'title' => 'paypal_delete',
            ],
            [
                'id'    => 151,
                'title' => 'paypal_access',
            ],
            [
                'id'    => 152,
                'title' => 'stripe_create',
            ],
            [
                'id'    => 153,
                'title' => 'stripe_edit',
            ],
            [
                'id'    => 154,
                'title' => 'stripe_show',
            ],
            [
                'id'    => 155,
                'title' => 'stripe_delete',
            ],
            [
                'id'    => 156,
                'title' => 'stripe_access',
            ],
            [
                'id'    => 157,
                'title' => 'facturama_create',
            ],
            [
                'id'    => 158,
                'title' => 'facturama_edit',
            ],
            [
                'id'    => 159,
                'title' => 'facturama_show',
            ],
            [
                'id'    => 160,
                'title' => 'facturama_delete',
            ],
            [
                'id'    => 161,
                'title' => 'facturama_access',
            ],
            [
                'id'    => 162,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
