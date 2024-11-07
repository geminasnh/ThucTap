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
            // Thêm trường session_id để lưu thông tin giỏ hàng của khách
            $table->string('session_id')->nullable()->after('product_id');
            // (Tuỳ chọn) Bạn có thể xóa cột user_id nếu không cần thiết nữa
            // $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cart', function (Blueprint $table) {
            // Xóa trường session_id nếu cần
            $table->dropColumn('session_id');
            // Nếu bạn đã xóa cột user_id, có thể thêm lại nếu cần
            // $table->unsignedBigInteger('user_id')->nullable();
        });
    }
};
