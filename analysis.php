<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<h2 class="mb-4">数据分析展示</h2>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5>犯罪热点地图</h5>
            </div>
            <div class="card-body">
                <img src="https://via.placeholder.com/600x300?text=犯罪热点地图" alt="犯罪热点地图" class="img-fluid">
                <p class="mt-3">通过GIS技术展示高发犯罪区域，辅助安防资源合理分配。</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5>犯罪率统计</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>区域</th>
                            <th>去年犯罪率</th>
                            <th>今年犯罪率</th>
                            <th>变化</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A区</td>
                            <td>5.2%</td>
                            <td>3.1%</td>
                            <td>-40.4%</td>
                        </tr>
                        <tr>
                            <td>B区</td>
                            <td>4.7%</td>
                            <td>2.8%</td>
                            <td>-40.4%</td>
                        </tr>
                        <tr>
                            <td>C区</td>
                            <td>6.5%</td>
                            <td>3.9%</td>
                            <td>-40.0%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-success text-white">
        <h5>预测分析效果</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h6>传统方法</h6>
                <ul>
                    <li>破案率：45%</li>
                    <li>响应时间：25分钟</li>
                    <li>覆盖范围：60%</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h6>智能系统</h6>
                <ul>
                    <li>破案率：78%</li>
                    <li>响应时间：8分钟</li>
                    <li>覆盖范围：95%</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 