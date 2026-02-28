<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'calculator';
?>
<div class="shipping-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="shipping-tab-btn <?php echo $sub == 'calculator' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('pricing-calc', this)">الحاسبة</button>
    <button class="shipping-tab-btn <?php echo $sub == 'transport-costs' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('pricing-transport', this)">تكاليف النقل</button>
    <button class="shipping-tab-btn <?php echo $sub == 'extra-charges' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('pricing-extra', this)">رسوم إضافية</button>
    <button class="shipping-tab-btn <?php echo $sub == 'special-offers' ? 'shipping-active' : ''; ?>" onclick="shippingOpenInternalTab('pricing-offers', this)">عروض خاصة</button>
</div>

<div id="pricing-calc" class="shipping-internal-tab" style="display: <?php echo $sub == 'calculator' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>حاسبة الشحن المتطورة</h4>
        <p>حساب التكلفة التقديرية بناءً على الوزن، الحجم، والوجهة.</p>
    </div>
</div>

<div id="pricing-transport" class="shipping-internal-tab" style="display: <?php echo $sub == 'transport-costs' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>تكاليف النقل والتشغيل</h4>
        <p>إدارة قوائم أسعار النقل الداخلي والدولي.</p>
    </div>
</div>

<div id="pricing-extra" class="shipping-internal-tab" style="display: <?php echo $sub == 'extra-charges' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>الرسوم الإضافية والخدمات</h4>
        <p>تحديد أسعار التغليف، التأمين، والخدمات الخاصة.</p>
    </div>
</div>

<div id="pricing-offers" class="shipping-internal-tab" style="display: <?php echo $sub == 'special-offers' ? 'block' : 'none'; ?>;">
    <div class="shipping-card">
        <h4>العروض الخاصة والخصومات</h4>
        <p>إدارة الحملات الترويجية وخصومات كبار العملاء.</p>
    </div>
</div>
