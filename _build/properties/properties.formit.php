<?php
/**
 * FormIt
 *
 * Copyright 2009-2011 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Default properties for FormIt snippet
 *
 * @package formit
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'hooks',
        'desc' => 'prop_formit.hooks_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'preHooks',
        'desc' => 'prop_formit.prehooks_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'submitVar',
        'desc' => 'prop_formit.submitvar_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'validate',
        'desc' => 'prop_formit.validate_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'errTpl',
        'desc' => 'prop_formit.errtpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '<span class="error">[[+error]]</span>',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'validationErrorMessage',
        'desc' => 'prop_formit.validationerrormessage_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '<p class="error">A form validation error occurred. Please check the values you have entered.</p>',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'validationErrorBulkTpl',
        'desc' => 'prop_formit.validationerrorbulktpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li>[[+error]]</li>',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'customValidators',
        'desc' => 'prop_formit.customvalidators_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'clearFieldsOnSuccess',
        'desc' => 'prop_formit.clearfieldsonsuccess_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'successMessage',
        'desc' => 'prop_formit.successmessage_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'successMessagePlaceholder',
        'desc' => 'prop_formit.successmessageplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'fi.successMessage',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'store',
        'desc' => 'prop_formit.store_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'placeholderPrefix',
        'desc' => 'prop_formit.placeholderprefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'fi.',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'storeTime',
        'desc' => 'prop_formit.storetime_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 300,
        'lexicon' => 'formit:properties',
    ),
    /* spam hook */
    array(
        'name' => 'spamEmailFields',
        'desc' => 'prop_formit.spamemailfields_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'email',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'spamCheckIp',
        'desc' => 'prop_formit.spamcheckip_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'formit:properties',
    ),
    /* recaptcha hook */
    array(
        'name' => 'recaptchaJs',
        'desc' => 'prop_formit.recaptchajs_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '{}',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'recaptchaTheme',
        'desc' => 'prop_formit.recaptchatheme_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'formit.opt_red','value' => 'red'),
            array('text' => 'formit.opt_white','value' => 'white'),
            array('text' => 'formit.opt_clean','value' => 'clean'),
            array('text' => 'formit.opt_blackglass','value' => 'blackglass'),
        ),
        'value' => 'clean',
        'lexicon' => 'formit:properties',
    ),
    /* Until google supports dynamic widths, leaving these out to prevent confusion */
    /*
    array(
        'name' => 'recaptchaWidth',
        'desc' => 'prop_formit.recaptchawidth_desc',
        'type' => 'list',
        'options' => '',
        'value' => 500,
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'recaptchaHeight',
        'desc' => 'prop_formit.recaptchaheight_desc',
        'type' => 'list',
        'options' => '',
        'value' => 300,
        'lexicon' => 'formit:properties',
    ),*/
    /* redirect hook */
    array(
        'name' => 'redirectTo',
        'desc' => 'prop_formit.redirectto_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'redirectParams',
        'desc' => 'prop_formit.redirectparams_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    /* email hook */
    array(
        'name' => 'emailTo',
        'desc' => 'prop_formit.emailto_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailToName',
        'desc' => 'prop_formit.emailtoname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailFrom',
        'desc' => 'prop_formit.emailfrom_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailFromName',
        'desc' => 'prop_formit.emailfromname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailReplyTo',
        'desc' => 'prop_formit.emailreplyto_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailReplyToName',
        'desc' => 'prop_formit.emailreplytoname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailCC',
        'desc' => 'prop_formit.emailcc_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailCCName',
        'desc' => 'prop_formit.emailccname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailBCC',
        'desc' => 'prop_formit.emailbcc_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailBCCName',
        'desc' => 'prop_formit.emailbccname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailSubject',
        'desc' => 'prop_formit.emailsubject_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailUseFieldForSubject',
        'desc' => 'prop_formit.emailusefieldforsubject_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailHtml',
        'desc' => 'prop_formit.emailhtml_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'emailConvertNewlines',
        'desc' => 'prop_formit.emailconvertnewlines_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'formit:properties',
    ),

    /* auto-responder properties */
    array(
        'name' => 'fiarTpl',
        'desc' => 'prop_fiar.fiartpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarToField',
        'desc' => 'prop_fiar.fiartofield_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'email',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarSubject',
        'desc' => 'prop_fiar.fiarsubject_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '[[++site_name]] Auto-Responder',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarFrom',
        'desc' => 'prop_fiar.fiarfrom_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarFromName',
        'desc' => 'prop_fiar.fiarfromname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarReplyTo',
        'desc' => 'prop_fiar.fiarreplyto_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarReplyToName',
        'desc' => 'prop_fiar.fiarreplytoname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarCC',
        'desc' => 'prop_fiar.fiarcc_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarCCName',
        'desc' => 'prop_fiar.fiarccname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarBCC',
        'desc' => 'prop_fiar.fiarbcc_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarBCCName',
        'desc' => 'prop_fiar.fiarbccname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'fiarHtml',
        'desc' => 'prop_fiar.fiarhtml_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'formit:properties',
    ),
    /* math hook */
    array(
        'name' => 'mathMinRange',
        'desc' => 'prop_math.mathminrange_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 10,
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'mathMaxRange',
        'desc' => 'prop_math.mathmaxrange_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 100,
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'mathField',
        'desc' => 'prop_math.mathfield_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'math',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'mathOp1Field',
        'desc' => 'prop_math.mathop1field_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'op1',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'mathOp2Field',
        'desc' => 'prop_math.mathop2field_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'op2',
        'lexicon' => 'formit:properties',
    ),
    array(
        'name' => 'mathOperatorField',
        'desc' => 'prop_math.mathoperatorfield_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'operator',
        'lexicon' => 'formit:properties',
    ),
);

return $properties;