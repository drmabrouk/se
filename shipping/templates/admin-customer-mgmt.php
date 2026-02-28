<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'profiles';
?>
<div class="shipping-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="shipping-tab-btn <?php echo $sub == 'profiles' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('customer-profiles', this)">ملفات العملاء</button>
    <button class="shipping-tab-btn <?php echo $sub == 'history' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('customer-history', this)">سجل الشحنات</button>
    <button class="shipping-tab-btn <?php echo $sub == 'address-book' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('customer-address', this)">دفتر العناوين</button>
    <button class="shipping-tab-btn <?php echo $sub == 'contracts' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('customer-contracts', this)">العقود</button>
    <button class="shipping-tab-btn <?php echo $sub == 'classification' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('customer-class', this)">التصنيف</button>
</div>

<div id="customer-profiles" class="shipping-internal-tab" style="display: <?php echo $sub == 'profiles' ? 'block' : 'none'; ?>;">
    <?php
    global $wpdb;
    $customers = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}shipping_customers ORDER BY created_at DESC");
    ?>
    <div class="shipping-card">
        <div style="display:flex; justify-content:space-between; margin-bottom:15px;">
            <h4>قاعدة بيانات العملاء</h4>
            <button class="shipping-btn" style="width:auto;">+ إضافة عميل جديد</button>
        </div>
        <div class="shipping-table-container">
            <table class="shipping-table">
                <thead><tr><th>الاسم</th><th>البريد</th><th>الهاتف</th><th>التصنيف</th></tr></thead>
                <tbody>
                    <?php if(empty($customers)): ?>
                        <tr><td colspan="4" style="text-align:center; padding:20px;">لا يوجد عملاء مسجلين.</td></tr>
                    <?php else: foreach($customers as $c): ?>
                        <tr>
                            <td><strong><?php echo esc_html($c->name); ?></strong></td>
                            <td><?php echo esc_html($c->email); ?></td>
                            <td><?php echo esc_html($c->phone); ?></td>
                            <td><span class="shipping-badge"><?php echo esc_html($c->classification); ?></span></td>
                        </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="customer-history" class="shipping-internal-tab" style="display: <?php echo $sub == 'history' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>سجل الشحنات لكل عميل</h4>
        <p>تاريخ التعاملات والشحنات السابقة للعملاء.</p>
    </div>
</div>

<div id="customer-address" class="shipping-internal-tab" style="display: <?php echo $sub == 'address-book' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>دفتر العناوين</h4>
        <p>إدارة مواقع الاستلام والتسليم الخاصة بالعملاء.</p>
    </div>
</div>

<div id="customer-contracts" class="shipping-internal-tab" style="display: <?php echo $sub == 'contracts' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>العقود والاتفاقيات</h4>
        <p>إدارة الوثائق القانونية والتعاقدية للعملاء.</p>
    </div>
</div>

<div id="customer-class" class="shipping-internal-tab" style="display: <?php echo $sub == 'classification' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>تصنيف العملاء</h4>
        <p>تقسيم العملاء حسب حجم التعامل (VIP، عادي، مستجد).</p>
    </div>
</div>
