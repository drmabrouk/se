<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'new-orders';
?>
<div class="shipping-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="shipping-tab-btn <?php echo $sub == 'new-orders' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('order-new', this)">طلبات جديدة</button>
    <button class="shipping-tab-btn <?php echo $sub == 'in-progress' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('order-progress', this)">قيد التنفيذ</button>
    <button class="shipping-tab-btn <?php echo $sub == 'completed' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('order-completed', this)">مكتملة</button>
    <button class="shipping-tab-btn <?php echo $sub == 'cancelled' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('order-cancelled', this)">ملغاة</button>
</div>

<div id="order-new" class="shipping-internal-tab" style="display: <?php echo $sub == 'new-orders' ? 'block' : 'none'; ?>;">
    <?php
    global $wpdb;
    $new_orders = $wpdb->get_results("SELECT o.*, c.name as customer_name FROM {$wpdb->prefix}shipping_orders o LEFT JOIN {$wpdb->prefix}shipping_customers c ON o.customer_id = c.id WHERE o.status = 'new' ORDER BY o.created_at DESC");
    ?>
    <div class="shipping-card">
        <h4>طلبات شحن جديدة</h4>
        <div class="shipping-table-container">
            <table class="shipping-table">
                <thead><tr><th>رقم الطلب</th><th>العميل</th><th>المبلغ</th><th>التاريخ</th></tr></thead>
                <tbody>
                    <?php if(empty($new_orders)): ?>
                        <tr><td colspan="4" style="text-align:center; padding:20px;">لا توجد طلبات جديدة.</td></tr>
                    <?php else: foreach($new_orders as $o): ?>
                        <tr>
                            <td><strong><?php echo $o->order_number; ?></strong></td>
                            <td><?php echo esc_html($o->customer_name); ?></td>
                            <td><?php echo number_format($o->total_amount, 2); ?></td>
                            <td><?php echo date('Y-m-d H:i', strtotime($o->created_at)); ?></td>
                        </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="order-progress" class="shipping-internal-tab" style="display: <?php echo $sub == 'in-progress' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>طلبات قيد التنفيذ</h4>
        <p>متابعة الطلبات التي يتم تجهيزها حالياً.</p>
    </div>
</div>

<div id="order-completed" class="shipping-internal-tab" style="display: <?php echo $sub == 'completed' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>طلبات مكتملة</h4>
        <p>أرشيف الطلبات التي تم تسويتها بنجاح.</p>
    </div>
</div>

<div id="order-cancelled" class="shipping-internal-tab" style="display: <?php echo $sub == 'cancelled' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>طلبات ملغاة</h4>
        <p>سجل الطلبات التي تم إلغاؤها مع ذكر الأسباب.</p>
    </div>
</div>
