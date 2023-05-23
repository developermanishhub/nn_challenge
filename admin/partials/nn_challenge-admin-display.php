<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://https://github.com/manishofficial
 * @since      1.0.0
 *
 * @package    Nn_challenge
 * @subpackage Nn_challenge/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h1><?php esc_html_e('NN Challenge', 'nn_challenge'); ?></h1>
    <p>Please click and copy the shortcode and paste it onto any page to load the game.</p>

    <table class="form-table" role="presentation">

        <tbody>
            <tr>
                <th scope="row"><label for="nn_challenge_shortcode">Shortcode</label></th>
                <td>
                    <input type="text" class="regular-text" name="nn_challenge_shortcode" value="[nn_challenge]" readonly="" style="width:300px;margin-bottom:5px;" id="copyShortcode">
                    <button class="button button-primary" id="copyButton">Copy</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>