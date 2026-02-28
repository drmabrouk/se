<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'documentation';
?>
<div class="shipping-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="shipping-tab-btn <?php echo $sub == 'documentation' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('customs-docs', this)">الوثائق</button>
    <button class="shipping-tab-btn <?php echo $sub == 'invoices' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('customs-invoices', this)">الفواتير</button>
    <button class="shipping-tab-btn <?php echo $sub == 'duties-taxes' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('customs-taxes', this)">الرسوم والضرائب</button>
    <button class="shipping-tab-btn <?php echo $sub == 'status' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('customs-status', this)">حالة التخليص</button>
</div>

<div id="customs-docs" class="shipping-internal-tab" style="display: <?php echo $sub == 'documentation' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>إدارة وثائق الشحن والمستندات</h4>
        <p>رفع ومعالجة بوالص الشحن وشهادات المنشأ.</p>
    </div>
</div>

<div id="customs-invoices" class="shipping-internal-tab" style="display: <?php echo $sub == 'invoices' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>الفواتير التجارية</h4>
        <p>مطابقة الفواتير التجارية مع الشحنات الفعلية.</p>
    </div>
</div>

<div id="customs-taxes" class="shipping-internal-tab" style="display: <?php echo $sub == 'duties-taxes' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>حساب الرسوم والضرائب الجمركية</h4>
        <p>أداة تقدير الضرائب الجمركية حسب نوع البضاعة والبلد.</p>
    </div>
</div>

<div id="customs-status" class="shipping-internal-tab" style="display: <?php echo $sub == 'status' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>متابعة حالة التخليص</h4>
        <p>تحديثات لحظية حول تقدم عملية التخليص في الموانئ.</p>
    </div>
</div>
