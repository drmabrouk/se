<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'create-shipment';
?>
<div class="workedia-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="workedia-tab-btn <?php echo $sub == 'create-shipment' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('shipment-create', this)">إنشاء شحنة</button>
    <button class="workedia-tab-btn <?php echo $sub == 'tracking' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('shipment-tracking', this)">تتبع الشحنات</button>
    <button class="workedia-tab-btn <?php echo $sub == 'monitoring' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('shipment-monitoring', this)">مراقبة الحالة</button>
    <button class="workedia-tab-btn <?php echo $sub == 'schedule' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('shipment-schedule', this)">جدول الشحن</button>
    <button class="workedia-tab-btn <?php echo $sub == 'archiving' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('shipment-archiving', this)">الأرشفة</button>
</div>

<div id="shipment-create" class="workedia-internal-tab" style="display: <?php echo $sub == 'create-shipment' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>نموذج إنشاء شحنة جديدة</h4>
        <form style="display:grid; grid-template-columns:1fr 1fr; gap:15px; margin-top:15px;">
            <div class="workedia-form-group"><label>رقم الشحنة:</label><input type="text" class="workedia-input"></div>
            <div class="workedia-form-group"><label>العميل:</label><select class="workedia-select"><option>اختر العميل...</option></select></div>
            <div class="workedia-form-group"><label>نقطة الانطلاق:</label><input type="text" class="workedia-input"></div>
            <div class="workedia-form-group"><label>نقطة الوصول:</label><input type="text" class="workedia-input"></div>
            <button class="workedia-btn" style="grid-column: span 2;">حفظ الشحنة</button>
        </form>
    </div>
</div>

<div id="shipment-tracking" class="workedia-internal-tab" style="display: <?php echo $sub == 'tracking' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>تتبع الشحنات</h4>
        <div style="display:flex; gap:10px; margin-bottom:15px;">
            <input type="text" class="workedia-input" placeholder="ادخل رقم الشحنة...">
            <button class="workedia-btn" style="width:auto;">بحث</button>
        </div>
    </div>
</div>

<div id="shipment-monitoring" class="workedia-internal-tab" style="display: <?php echo $sub == 'monitoring' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>مراقبة حالة الشحن</h4>
        <p>عرض تفصيلي لجميع مراحل الشحن الحالية.</p>
    </div>
</div>

<div id="shipment-schedule" class="workedia-internal-tab" style="display: <?php echo $sub == 'schedule' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>إدارة جدول الشحن</h4>
        <p>تنظيم المواعيد والرحلات القادمة.</p>
    </div>
</div>

<div id="shipment-archiving" class="workedia-internal-tab" style="display: <?php echo $sub == 'archiving' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>أرشفة الشحنات</h4>
        <p>سجل الشحنات المنتهية والملغاة.</p>
    </div>
</div>
