<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'calculator';
?>
<div class="workedia-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="workedia-tab-btn <?php echo $sub == 'calculator' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('pricing-calc', this)">الحاسبة</button>
    <button class="workedia-tab-btn <?php echo $sub == 'transport-costs' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('pricing-transport', this)">تكاليف النقل</button>
    <button class="workedia-tab-btn <?php echo $sub == 'extra-charges' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('pricing-extra', this)">رسوم إضافية</button>
    <button class="workedia-tab-btn <?php echo $sub == 'special-offers' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('pricing-offers', this)">عروض خاصة</button>
</div>

<div id="pricing-calc" class="workedia-internal-tab" style="display: <?php echo $sub == 'calculator' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>حاسبة الشحن المتطورة</h4>
        <p>حساب التكلفة التقديرية بناءً على الوزن، الحجم، والوجهة.</p>
    </div>
</div>

<div id="pricing-transport" class="workedia-internal-tab" style="display: <?php echo $sub == 'transport-costs' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>تكاليف النقل والتشغيل</h4>
        <p>إدارة قوائم أسعار النقل الداخلي والدولي.</p>
    </div>
</div>

<div id="pricing-extra" class="workedia-internal-tab" style="display: <?php echo $sub == 'extra-charges' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>الرسوم الإضافية والخدمات</h4>
        <p>تحديد أسعار التغليف، التأمين، والخدمات الخاصة.</p>
    </div>
</div>

<div id="pricing-offers" class="workedia-internal-tab" style="display: <?php echo $sub == 'special-offers' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>العروض الخاصة والخصومات</h4>
        <p>إدارة الحملات الترويجية وخصومات كبار العملاء.</p>
    </div>
</div>
