<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder {

    public function run() {
        $addInvoice = new Permission();
        $addInvoice->name = 'create-invoice';
        $addInvoice->display_name = 'Created Invoice';
        $addInvoice->description = 'Admin can create invoice';
        $addInvoice->save();

        $editInvoice = new Permission();
        $editInvoice->name = 'edit-invoice';
        $editInvoice->display_name = 'Edit Invoice';
        $editInvoice->description = 'Admin can edit invoice';
        $editInvoice->save();

        $deleteInvoice = new Permission();
        $deleteInvoice->name = 'delete-invoice';
        $deleteInvoice->display_name = 'Delete Invoice';
        $deleteInvoice->description = 'Admin can delete invoice';
        $deleteInvoice->save();
    }

}
