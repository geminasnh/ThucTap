<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cart', function (Blueprint $table) {
            // Thay đổi kiểu dữ liệu của cột 'grand_total' thành DECIMAL
            $table->decimal('grand_total', 15, 2)->change(); // 15 là tổng số chữ số, 2 là số chữ số sau dấu phẩy
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cart', function (Blueprint $table) {
            // Nếu cần, bạn có thể đổi lại kiểu dữ liệu cũ, ví dụ 'integer' hoặc 'float'
            $table->integer('grand_total')->change();
        });
    }
};
