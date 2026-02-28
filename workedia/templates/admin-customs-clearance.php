<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'documentation';
?>
<div class="workedia-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="workedia-tab-btn <?php echo $sub == 'documentation' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('customs-docs', this)">الوثائق</button>
    <button class="workedia-tab-btn <?php echo $sub == 'invoices' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('customs-invoices', this)">الفواتير</button>
    <button class="workedia-tab-btn <?php echo $sub == 'duties-taxes' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('customs-taxes', this)">الرسوم والضرائب</button>
    <button class="workedia-tab-btn <?php echo $sub == 'status' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('customs-status', this)">حالة التخليص</button>
</div>

<div id="customs-docs" class="workedia-internal-tab" style="display: <?php echo $sub == 'documentation' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>إدارة وثائق الشحن والمستندات</h4>
        <p>رفع ومعالجة بوالص الشحن وشهادات المنشأ.</p>
    </div>
</div>

<div id="customs-invoices" class="workedia-internal-tab" style="display: <?php echo $sub == 'invoices' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>الفواتير التجارية</h4>
        <p>مطابقة الفواتير التجارية مع الشحنات الفعلية.</p>
    </div>
</div>

<div id="customs-taxes" class="workedia-internal-tab" style="display: <?php echo $sub == 'duties-taxes' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>حساب الرسوم والضرائب الجمركية</h4>
        <p>أداة تقدير الضرائب الجمركية حسب نوع البضاعة والبلد.</p>
    </div>
</div>

<div id="customs-status" class="workedia-internal-tab" style="display: <?php echo $sub == 'status' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>متابعة حالة التخليص</h4>
        <p>تحديثات لحظية حول تقدم عملية التخليص في الموانئ.</p>
    </div>
</div>
