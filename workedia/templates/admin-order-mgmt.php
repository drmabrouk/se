<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'new-orders';
?>
<div class="workedia-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="workedia-tab-btn <?php echo $sub == 'new-orders' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('order-new', this)">طلبات جديدة</button>
    <button class="workedia-tab-btn <?php echo $sub == 'in-progress' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('order-progress', this)">قيد التنفيذ</button>
    <button class="workedia-tab-btn <?php echo $sub == 'completed' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('order-completed', this)">مكتملة</button>
    <button class="workedia-tab-btn <?php echo $sub == 'cancelled' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('order-cancelled', this)">ملغاة</button>
</div>

<div id="order-new" class="workedia-internal-tab" style="display: <?php echo $sub == 'new-orders' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>طلبات شحن جديدة</h4>
        <p>مراجعة وتأكيد طلبات الشحن المستلمة عبر الموقع.</p>
    </div>
</div>

<div id="order-progress" class="workedia-internal-tab" style="display: <?php echo $sub == 'in-progress' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>طلبات قيد التنفيذ</h4>
        <p>متابعة الطلبات التي يتم تجهيزها حالياً.</p>
    </div>
</div>

<div id="order-completed" class="workedia-internal-tab" style="display: <?php echo $sub == 'completed' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>طلبات مكتملة</h4>
        <p>أرشيف الطلبات التي تم تسويتها بنجاح.</p>
    </div>
</div>

<div id="order-cancelled" class="workedia-internal-tab" style="display: <?php echo $sub == 'cancelled' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>طلبات ملغاة</h4>
        <p>سجل الطلبات التي تم إلغاؤها مع ذكر الأسباب.</p>
    </div>
</div>
