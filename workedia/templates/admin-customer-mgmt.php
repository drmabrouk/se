<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'profiles';
?>
<div class="workedia-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="workedia-tab-btn <?php echo $sub == 'profiles' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('customer-profiles', this)">ملفات العملاء</button>
    <button class="workedia-tab-btn <?php echo $sub == 'history' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('customer-history', this)">سجل الشحنات</button>
    <button class="workedia-tab-btn <?php echo $sub == 'address-book' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('customer-address', this)">دفتر العناوين</button>
    <button class="workedia-tab-btn <?php echo $sub == 'contracts' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('customer-contracts', this)">العقود</button>
    <button class="workedia-tab-btn <?php echo $sub == 'classification' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('customer-class', this)">التصنيف</button>
</div>

<div id="customer-profiles" class="workedia-internal-tab" style="display: <?php echo $sub == 'profiles' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <div style="display:flex; justify-content:space-between; margin-bottom:15px;">
            <h4>قاعدة بيانات العملاء</h4>
            <button class="workedia-btn" style="width:auto;">+ إضافة عميل جديد</button>
        </div>
        <div class="workedia-table-container">
            <table class="workedia-table">
                <thead><tr><th>الاسم</th><th>البريد</th><th>الهاتف</th><th>التصنيف</th></tr></thead>
                <tbody><tr><td colspan="4" style="text-align:center; padding:20px;">لا يوجد عملاء مسجلين.</td></tr></tbody>
            </table>
        </div>
    </div>
</div>

<div id="customer-history" class="workedia-internal-tab" style="display: <?php echo $sub == 'history' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>سجل الشحنات لكل عميل</h4>
        <p>تاريخ التعاملات والشحنات السابقة للعملاء.</p>
    </div>
</div>

<div id="customer-address" class="workedia-internal-tab" style="display: <?php echo $sub == 'address-book' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>دفتر العناوين</h4>
        <p>إدارة مواقع الاستلام والتسليم الخاصة بالعملاء.</p>
    </div>
</div>

<div id="customer-contracts" class="workedia-internal-tab" style="display: <?php echo $sub == 'contracts' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>العقود والاتفاقيات</h4>
        <p>إدارة الوثائق القانونية والتعاقدية للعملاء.</p>
    </div>
</div>

<div id="customer-class" class="workedia-internal-tab" style="display: <?php echo $sub == 'classification' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>تصنيف العملاء</h4>
        <p>تقسيم العملاء حسب حجم التعامل (VIP، عادي، مستجد).</p>
    </div>
</div>
