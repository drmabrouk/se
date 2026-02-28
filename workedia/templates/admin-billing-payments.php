<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'invoice-gen';
?>
<div class="workedia-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="workedia-tab-btn <?php echo $sub == 'invoice-gen' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('billing-gen', this)">إصدار فواتير</button>
    <button class="workedia-tab-btn <?php echo $sub == 'records' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('billing-records', this)">سجلات الدفع</button>
    <button class="workedia-tab-btn <?php echo $sub == 'balances' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('billing-balances', this)">الأرصدة</button>
    <button class="workedia-tab-btn <?php echo $sub == 'financial-reports' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('billing-reports', this)">التقارير المالية</button>
</div>

<div id="billing-gen" class="workedia-internal-tab" style="display: <?php echo $sub == 'invoice-gen' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>أدوات إصدار الفواتير</h4>
        <p>توليد فواتير تلقائية بناءً على خدمات الشحن المقدمة.</p>
    </div>
</div>

<div id="billing-records" class="workedia-internal-tab" style="display: <?php echo $sub == 'records' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>سجلات المدفوعات</h4>
        <p>أرشيف بجميع المبالغ المحصلة من العملاء.</p>
    </div>
</div>

<div id="billing-balances" class="workedia-internal-tab" style="display: <?php echo $sub == 'balances' ? 'block' : 'none'; ?>;">
    <div class="workedia-card" style="border-right: 5px solid #f59e0b;">
        <h4>الأرصدة المستحقة (المديونيات)</h4>
        <p>متابعة الفواتير التي لم يتم سدادها بعد.</p>
    </div>
</div>

<div id="billing-reports" class="workedia-internal-tab" style="display: <?php echo $sub == 'financial-reports' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>التقارير المالية</h4>
        <p>تحليل مالي شامل للإيرادات والمصروفات والأرباح.</p>
    </div>
</div>
