<div class="wrap">
    <?php screen_icon(); echo '<h2>'.get_current_theme().__(' 佈景設定', 'sampletheme').'</h2>'; ?>
    <form method="post" action="options.php">
        <?php settings_fields('sample_options'); ?>
		<?php $options = get_option('top_bar_option'); ?>
        <table>
            <tr>
                <th style="width:20%">Facebook url</th>
                <td>
                    <input type="text" class="regular-text" name="top_bar_option[facebook]" value="<?php esc_attr_e($options['facebook']) ?>">
                </td>
            </tr>
            <tr>
                <th>Instagram url</th>
                <td>
                    <input type="text" class="regular-text" name="top_bar_option[instagram]" value="<?php esc_attr_e($options['instagram']) ?>">
                </td>
            </tr>
            <tr>
                <th>Twitter url</th>
                <td>
                    <input type="text" class="regular-text" name="top_bar_option[twitter]" value="<?php esc_attr_e($options['twitter']) ?>">
                </td>
            </tr>
            <tr>
                <th>Google plus url</th>
                <td>
                    <input type="text" class="regular-text" name="top_bar_option[google]" value="<?php esc_attr_e($options['google']) ?>">
                </td>
            </tr>
             <tr>
                <th>Youtube url</th>
                <td>
                    <input type="text" class="regular-text" name="top_bar_option[youtube]" value="<?php esc_attr_e($options['youtube']) ?>">
                </td>
            </tr>
            <tr>
               <th>github url</th>
               <td>
                   <input type="text" class="regular-text" name="top_bar_option[github]" value="<?php esc_attr_e($options['github']) ?>">
               </td>
           </tr>
            <tr>
                <th>頁尾資訊</th>
                <td>
                    <textarea name="top_bar_option[footer]" rows="4" cols="50"><?php echo (isset($options['footer'])) ? $options['footer'] : ''; ?></textarea>
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" /></td>
            </tr>
        </table>
    </form>
</div>
