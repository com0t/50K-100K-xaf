<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}
?>

<form method="post" novalidate="novalidate">
    <input type="hidden" name="tab" value="general"/>
	<?php wp_nonce_field() ?>
    <table class="form-table">
        <tbody>
        <tr>
            <th scope="row"><?php echo __( 'Activate' ) . ' ' . __bt( 'brizy', 'Brizy' ) . ' ' . __( 'For' ); ?></th>
            <td>
                <fieldset>
					<?php foreach ( $types as $type ) {
						do_action( 'brizy_settings_post_type_row', $type );
						?><br><?php
					}
					?>
                </fieldset>
            </td>
        </tr>
        <tr>
            <th scope="row"><?php echo __( 'Enable SVG uploads' ); ?></th>
            <td>
                <label>
                    <input type="checkbox"
                           id="svg-upload-enabled"
                           name="svg-upload-enabled"
                           value="1"
			            <?php echo $svgUploadEnabled ? 'checked' : ''; ?>
                    >

                </label>
            </td>
        </tr>
        <?php if ( $showPostponeBtn ): ?>
            <tr>
                <th scope="row"><?php echo __( 'Allow me to update to the latest version.' ); ?></th>
                <td>
                    <label>
                        <a href="<?php echo $disablePostponeUpdateUrl; ?>" class="button button-primary">Allow</a>
                    </label>
                </td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>


    <p class="submit">
        <button type="submit"
                name="brizy-general-submit"
                id="submit"
                class="button button-primary"
        ><?php echo __( 'Save Changes', 'brizy' ); ?></button>
    </p>
</form>
