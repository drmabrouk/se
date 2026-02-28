<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'live-tracking';
?>
<div class="workedia-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="workedia-tab-btn <?php echo $sub == 'live-tracking' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('logistic-live', this)">تتبع مباشر</button>
    <button class="workedia-tab-btn <?php echo $sub == 'routes' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('logistic-routes', this)">مسارات الشحن</button>
    <button class="workedia-tab-btn <?php echo $sub == 'stop-points' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('logistic-stops', this)">نقاط التوقف</button>
    <button class="workedia-tab-btn <?php echo $sub == 'warehouse' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('logistic-warehouse', this)">المستودعات</button>
    <button class="workedia-tab-btn <?php echo $sub == 'fleet' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('logistic-fleet', this)">الأسطول</button>
</div>

<div id="logistic-live" class="workedia-internal-tab" style="display: <?php echo $sub == 'live-tracking' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>خريطة التتبع المباشر</h4>
        <div style="background:#eee; height:300px; display:flex; align-items:center; justify-content:center;">(نظام GPS متصل)</div>
    </div>
</div>

<div id="logistic-routes" class="workedia-internal-tab" style="display: <?php echo $sub == 'routes' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>إدارة مسارات الرحلات</h4>
        <p>تحديد أفضل الطرق والمسارات لشحنات النقل البري والبحري.</p>
    </div>
</div>

<div id="logistic-stops" class="workedia-internal-tab" style="display: <?php echo $sub == 'stop-points' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>نقاط التوقف والمحطات</h4>
        <p>إدارة محطات الترانزيت ونقاط التفريغ.</p>
    </div>
</div>

<div id="logistic-warehouse" class="workedia-internal-tab" style="display: <?php echo $sub == 'warehouse' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>إدارة المستودعات</h4>
        <p>متابعة المخزون، المساحات المتاحة، وعمليات التخزين.</p>
    </div>
</div>

<div id="logistic-fleet" class="workedia-internal-tab" style="display: <?php echo $sub == 'fleet' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>إدارة الأسطول</h4>
        <p>بيانات الشاحنات، السائقين، وجداول الصيانة.</p>
    </div>
</div>
