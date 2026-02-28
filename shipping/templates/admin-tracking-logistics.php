<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'live-tracking';
?>
<div class="shipping-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="shipping-tab-btn <?php echo $sub == 'live-tracking' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('logistic-live', this)">تتبع مباشر</button>
    <button class="shipping-tab-btn <?php echo $sub == 'routes' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('logistic-routes', this)">مسارات الشحن</button>
    <button class="shipping-tab-btn <?php echo $sub == 'stop-points' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('logistic-stops', this)">نقاط التوقف</button>
    <button class="shipping-tab-btn <?php echo $sub == 'warehouse' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('logistic-warehouse', this)">المستودعات</button>
    <button class="shipping-tab-btn <?php echo $sub == 'fleet' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('logistic-fleet', this)">الأسطول</button>
</div>

<div id="logistic-live" class="shipping-internal-tab" style="display: <?php echo $sub == 'live-tracking' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>خريطة التتبع المباشر</h4>
        <div style="background:#eee; height:300px; display:flex; align-items:center; justify-content:center;">(نظام GPS متصل)</div>
    </div>
</div>

<div id="logistic-routes" class="shipping-internal-tab" style="display: <?php echo $sub == 'routes' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>إدارة مسارات الرحلات</h4>
        <p>تحديد أفضل الطرق والمسارات لشحنات النقل البري والبحري.</p>
    </div>
</div>

<div id="logistic-stops" class="shipping-internal-tab" style="display: <?php echo $sub == 'stop-points' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>نقاط التوقف والمحطات</h4>
        <p>إدارة محطات الترانزيت ونقاط التفريغ.</p>
    </div>
</div>

<div id="logistic-warehouse" class="shipping-internal-tab" style="display: <?php echo $sub == 'warehouse' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>إدارة المستودعات</h4>
        <p>متابعة المخزون، المساحات المتاحة، وعمليات التخزين.</p>
    </div>
</div>

<div id="logistic-fleet" class="shipping-internal-tab" style="display: <?php echo $sub == 'fleet' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>إدارة الأسطول</h4>
        <p>بيانات الشاحنات، السائقين، وجداول الصيانة.</p>
    </div>
</div>
