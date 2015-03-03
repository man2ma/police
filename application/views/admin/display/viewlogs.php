<br>
<br>
<legend><i class="glyphicon glyphicon-cog"></i> Logs</legend>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped ">
            <thead>
            <th>IP Address</th>
            <th>Browser Used</th>
            <th>Time</th>
            <th>Last Activity</th>
            </thead>
            <tbody>
                <?php foreach($sessions->result() as $sess) : ?>
                <tr>
                    <td><?php echo $sess->ip_address; ?></td>
                    <td><?php echo $sess->user_agent; ?></td>
                    <td><?php echo $sess->last_activity; ?></td>
                    <td><?php echo $sess->user_data; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        
    </div>
</div>