<div>
    <div class="pull-left">
        <h2><?php echo __('Emails', 'emails'); ?></h2>
    </div>    
    <div class="clearfix"></div>
</div>

<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th><?php echo __('Email templates', 'emails'); ?></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php if (count($email_templates_list) != 0) foreach ($email_templates_list as $email_template) { ?>
    <tr>
        <td><?php echo basename($email_template, '.email.php'); ?></td>
        <td>
            <div class="pull-right">            
                <div class="btn-group">
                    <?php echo Html::anchor(__('Edit', 'emails'), 'index.php?id=emails&action=edit_email_template&filename='.basename($email_template, '.email.php'), array('class' => 'btn btn-primary')); ?>
                </div>         
            </div>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
