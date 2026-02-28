<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'invoice-gen';
?>
<div class="shipping-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="shipping-tab-btn <?php echo $sub == 'invoice-gen' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('billing-gen', this)">إصدار فواتير</button>
    <button class="shipping-tab-btn <?php echo $sub == 'records' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('billing-records', this)">سجلات الدفع</button>
    <button class="shipping-tab-btn <?php echo $sub == 'balances' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('billing-balances', this)">الأرصدة</button>
    <button class="shipping-tab-btn <?php echo $sub == 'financial-reports' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('billing-reports', this)">التقارير المالية</button>
</div>

<div id="billing-gen" class="shipping-internal-tab" style="display: <?php echo $sub == 'invoice-gen' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>أدوات إصدار الفواتير</h4>
        <p>توليد فواتير تلقائية بناءً على خدمات الشحن المقدمة.</p>
    </div>
</div>

<div id="billing-records" class="shipping-internal-tab" style="display: <?php echo $sub == 'records' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>سجلات المدفوعات</h4>
        <p>أرشيف بجميع المبالغ المحصلة من العملاء.</p>
    </div>
</div>

<div id="billing-balances" class="shipping-internal-tab" style="display: <?php echo $sub == 'balances' ? 'block' : 'none'; ?>;">
    <div class="shipping-card" style="border-right: 5px solid #f59e0b;">
        <h4>الأرصدة المستحقة (المديونيات)</h4>
        <p>متابعة الفواتير التي لم يتم سدادها بعد.</p>
    </div>
</div>

<div id="billing-reports" class="shipping-internal-tab" style="display: <?php echo $sub == 'financial-reports' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>التقارير المالية</h4>
        <p>تحليل مالي شامل للإيرادات والمصروفات والأرباح.</p>
    </div>
</div>
