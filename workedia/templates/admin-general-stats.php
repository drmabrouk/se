<?php if (!defined('ABSPATH')) exit;
$sub = $_GET['sub'] ?? 'active-shipments';
?>
<div class="workedia-tabs-wrapper" style="display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid #eee; overflow-x: auto; white-space: nowrap; padding-bottom: 10px;">
    <button class="workedia-tab-btn <?php echo $sub == 'active-shipments' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('stats-active', this)">الشحنات النشطة</button>
    <button class="workedia-tab-btn <?php echo $sub == 'delivered-shipments' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('stats-delivered', this)">الشحنات المسلمة</button>
    <button class="workedia-tab-btn <?php echo $sub == 'delayed-shipments' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('stats-delayed', this)">الشحنات المتأخرة</button>
    <button class="workedia-tab-btn <?php echo $sub == 'total-revenue' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('stats-revenue', this)">إجمالي الإيرادات</button>
    <button class="workedia-tab-btn <?php echo $sub == 'real-time-status' ? 'workedia-active' : ''; ?>" onclick="workediaOpenInternalTab('stats-realtime', this)">حالة العمليات</button>
</div>

<div id="stats-active" class="workedia-internal-tab" style="display: <?php echo $sub == 'active-shipments' ? 'block' : 'none'; ?>;">
    <?php
    global $wpdb;
    $active_shipments = $wpdb->get_results("SELECT s.*, c.name as customer_name FROM {$wpdb->prefix}workedia_shipments s LEFT JOIN {$wpdb->prefix}workedia_customers c ON s.customer_id = c.id WHERE s.status != 'delivered' AND s.is_archived = 0");
    ?>
    <div class="workedia-card">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;">
            <h4 style="margin:0;">الشحنات النشطة حالياً</h4>
            <span class="workedia-badge workedia-badge-high">إجمالي: <?php echo count($active_shipments); ?></span>
        </div>
        <div class="workedia-table-container">
            <table class="workedia-table">
                <thead><tr><th>رقم الشحنة</th><th>العميل</th><th>المسار</th><th>الحالة</th></tr></thead>
                <tbody>
                    <?php if(empty($active_shipments)): ?>
                        <tr><td colspan="4" style="text-align:center; padding:20px;">لا توجد بيانات متاحة حالياً.</td></tr>
                    <?php else: foreach($active_shipments as $shp): ?>
                        <tr>
                            <td><strong><?php echo $shp->shipment_number; ?></strong></td>
                            <td><?php echo esc_html($shp->customer_name); ?></td>
                            <td><?php echo esc_html($shp->origin . ' → ' . $shp->destination); ?></td>
                            <td><span class="workedia-badge"><?php echo $shp->status; ?></span></td>
                        </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="stats-delivered" class="workedia-internal-tab" style="display: <?php echo $sub == 'delivered-shipments' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>الشحنات المسلمة</h4>
        <p>عرض ملخص الشحنات التي تم تسليمها بنجاح.</p>
    </div>
</div>

<div id="stats-delayed" class="workedia-internal-tab" style="display: <?php echo $sub == 'delayed-shipments' ? 'block' : 'none'; ?>;">
    <div class="workedia-card" style="border-right: 5px solid #e53e3e;">
        <h4>الشحنات المتأخرة</h4>
        <p>تنبيه: هناك شحنات تجاوزت الموعد المحدد.</p>
    </div>
</div>

<div id="stats-revenue" class="workedia-internal-tab" style="display: <?php echo $sub == 'total-revenue' ? 'block' : 'none'; ?>;">
    <?php
    $total_revenue = $wpdb->get_var("SELECT SUM(amount) FROM {$wpdb->prefix}workedia_invoices WHERE status = 'paid'");
    ?>
    <div class="workedia-card">
        <h4>إجمالي الإيرادات (المحصلة)</h4>
        <div style="font-size: 2em; font-weight: 800; color: #27ae60;"><?php echo number_format($total_revenue ?: 0, 2); ?> EGP</div>
    </div>
</div>

<div id="stats-realtime" class="workedia-internal-tab" style="display: <?php echo $sub == 'real-time-status' ? 'block' : 'none'; ?>;">
    <div class="workedia-card">
        <h4>حالة العمليات المباشرة</h4>
        <div style="height: 200px; display: flex; align-items: center; justify-content: center; background: #f8fafc; border-radius: 8px;">
            <span class="dashicons dashicons-chart-line" style="font-size: 50px; color: #cbd5e0;"></span>
        </div>
    </div>
</div>
