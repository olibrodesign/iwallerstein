<?php
/**
 * Block Information & Attributes File.
 *
 * @since 1.0.0
 *
 * @package spectra-pro
 */

$form__border_attribute     = UAGB_Block_Helper::uag_generate_border_attribute( 'form' );
$input_border_attribute     = UAGB_Block_Helper::uag_generate_border_attribute( 'field' );
$register__border_attribute = UAGB_Block_Helper::uag_generate_border_attribute( 'btn' );




return array_merge(
	array(
		'afterRegisterActions'           => [],
		'reCaptchaEnable'                => false,
		'reCaptchaType'                  => 'v2',
		'hidereCaptchaBatch'             => false,

		'formStyle'                      => 'boxed',
		'overallAlignment'               => '',

		// alignment.
		'alignRegisterBtn'               => 'full',
		'alignRegisterBtnTablet'         => 'full',
		'alignRegisterBtnMobile'         => 'full',


		// form styling.
		'formWidth'                      => '100',
		'formWidthTablet'                => '100',
		'formWidthMobile'                => '100',
		'formWidthType'                  => '%',
		'formWidthTypeTablet'            => '%',
		'formWidthTypeMobile'            => '%',

		'backgroundType'                 => 'none',
		'backgroundImageDesktop'         => '',
		'backgroundImageTablet'          => '',
		'backgroundImageMobile'          => '',
		'backgroundPositionDesktop'      => array(
			'x' => 0.5,
			'y' => 0.5,
		),
		'backgroundPositionTablet'       => '',
		'backgroundPositionMobile'       => '',
		'backgroundSizeDesktop'          => 'cover',
		'backgroundSizeTablet'           => '',
		'backgroundSizeMobile'           => '',
		'backgroundRepeatDesktop'        => 'no-repeat',
		'backgroundRepeatTablet'         => '',
		'backgroundRepeatMobile'         => '',
		'backgroundAttachmentDesktop'    => 'scroll',
		'backgroundAttachmentTablet'     => '',
		'backgroundAttachmentMobile'     => '',
		'backgroundColor'                => '',
		'backgroundOpacity'              => '',
		'backgroundImageColor'           => '#FFFFFF75',
		'gradientValue'                  => 'linear-gradient(90deg, rgba(6, 147, 227, 0.5) 0%, rgba(155, 81, 224, 0.5) 100%)',
		'gradientColor1'                 => '#06558a',
		'gradientColor2'                 => '#0063a1',
		'gradientType'                   => 'linear',
		'gradientLocation1'              => 0,
		'gradientLocation2'              => 100,
		'gradientAngle'                  => 0,
		'selectGradient'                 => 'basic',
		'boxShadowColor'                 => '#00000070',
		'boxShadowHOffset'               => 0,
		'boxShadowVOffset'               => 0,
		'boxShadowBlur'                  => '',
		'boxShadowSpread'                => '',
		'boxShadowPosition'              => 'outset',
		'boxShadowColorHover'            => '',
		'boxShadowHOffsetHover'          => 0,
		'boxShadowVOffsetHover'          => 0,
		'boxShadowBlurHover'             => '',
		'boxShadowSpreadHover'           => '',
		'boxShadowPositionHover'         => 'outset',
		'backgroundCustomSizeDesktop'    => 100,
		'backgroundCustomSizeTablet'     => '',
		'backgroundCustomSizeMobile'     => '',
		'backgroundCustomSizeType'       => '%',
		'overlayType'                    => 'none',
		'customPosition'                 => 'default',
		'xPositionDesktop'               => '',
		'xPositionTablet'                => '',
		'xPositionMobile'                => '',
		'xPositionType'                  => 'px',
		'xPositionTypeTablet'            => 'px',
		'xPositionTypeMobile'            => 'px',
		'yPositionDesktop'               => '',
		'yPositionTablet'                => '',
		'yPositionMobile'                => '',
		'yPositionType'                  => 'px',
		'yPositionTypeTablet'            => 'px',
		'yPositionTypeMobile'            => 'px',

		// row gap.
		'rowGap'                         => '20',
		'rowGapTablet'                   => '',
		'rowGapMobile'                   => '',
		'rowGapUnit'                     => 'px',
		// form padding.
		'formTopPadding'                 => '',
		'formRightPadding'               => '',
		'formLeftPadding'                => '',
		'formBottomPadding'              => '',
		'formTopPaddingTablet'           => '',
		'formRightPaddingTablet'         => '',
		'formLeftPaddingTablet'          => '',
		'formBottomPaddingTablet'        => '',
		'formTopPaddingMobile'           => 20,
		'formRightPaddingMobile'         => 30,
		'formLeftPaddingMobile'          => 30,
		'formBottomPaddingMobile'        => 20,
		'formPaddingUnit'                => 'px',
		'formPaddingUnitTablet'          => 'px',
		'formPaddingUnitMobile'          => 'px',
		'formPaddingLink'                => '',

		// Login Information style.
		'loginInfoLoadGoogleFonts'       => false,
		'loginInfoFontFamily'            => 'Default',
		'loginInfoFontWeight'            => '',
		'loginInfoFontSize'              => '',
		'loginInfoFontSizeType'          => 'px',
		'loginInfoFontSizeTablet'        => '',
		'loginInfoFontSizeMobile'        => '',
		'loginInfoLineHeight'            => '',
		'loginInfoLineHeightType'        => 'em',
		'loginInfoLineHeightTablet'      => '',
		'loginInfoLineHeightMobile'      => '',
		'loginInfoFontStyle'             => 'normal',
		'loginInfoLetterSpacing'         => '',
		'loginInfoLetterSpacingTablet'   => '',
		'loginInfoLetterSpacingMobile'   => '',
		'loginInfoLetterSpacingType'     => 'px',
		'loginInfoColor'                 => '',
		'loginInfoHoverColor'            => '',
		'loginInfoDecoration'            => '',
		'loginInfoTransform'             => '',
		'loginInfoLinkColor'             => '',
		'loginInfoLinkHoverColor'        => '',

		// label style.
		'labelloadGoogleFonts'           => false,
		'labelFontFamily'                => 'Default',
		'labelFontWeight'                => '',
		'labelFontSize'                  => '',
		'labelFontSizeType'              => 'px',
		'labelFontSizeTablet'            => '',
		'labelFontSizeMobile'            => '',
		'labelLineHeight'                => '',
		'labelLineHeightType'            => 'em',
		'labelLineHeightTablet'          => '',
		'labelLineHeightMobile'          => '',
		'labelGap'                       => '',
		'labelGapTablet'                 => '',
		'labelGapMobile'                 => '',
		'labelGapUnit'                   => 'px',
		'labelFontStyle'                 => 'normal',
		'labelLetterSpacing'             => '',
		'labelLetterSpacingTablet'       => '',
		'labelLetterSpacingMobile'       => '',
		'labelLetterSpacingType'         => 'px',
		'labelColor'                     => '',
		'labelHoverColor'                => '',
		'labelDecoration'                => '',
		'labelTransform'                 => '',
		// input style.
		'inputloadGoogleFonts'           => false,
		'inputFontFamily'                => 'Default',
		'inputFontWeight'                => '',
		'inputFontSize'                  => '',
		'inputFontSizeType'              => 'px',
		'inputFontSizeTablet'            => '',
		'inputFontSizeMobile'            => '',
		'inputLineHeightType'            => 'em',
		'inputLineHeight'                => '',
		'inputLineHeightTablet'          => '',
		'inputLineHeightMobile'          => '',
		'inputColor'                     => '',
		'inputplaceholderColor'          => '',
		'inputplaceholderHoverColor'     => '',
		'inputplaceholderActiveColor'    => '',
		'inputBGColor'                   => '',
		'inputBGHoverColor'              => '',
		'fieldBorderHColor'              => '',
		'bgActiveColor'                  => '',
		'inputFontStyle'                 => '',
		'inputLetterSpacing'             => '',
		'inputLetterSpacingTablet'       => '',
		'inputLetterSpacingMobile'       => '',
		'inputLetterSpacingType'         => 'px',
		'inputTransform'                 => '',
		'inputDecoration'                => '',
		'paddingFieldTop'                => '',
		'paddingFieldRight'              => '',
		'paddingFieldBottom'             => '',
		'paddingFieldLeft'               => '',
		'paddingFieldTopTablet'          => '',
		'paddingFieldRightTablet'        => '',
		'paddingFieldBottomTablet'       => '',
		'paddingFieldLeftTablet'         => '',
		'paddingFieldTopMobile'          => '',
		'paddingFieldRightMobile'        => '',
		'paddingFieldBottomMobile'       => '',
		'paddingFieldLeftMobile'         => '',
		'paddingFieldUnit'               => 'px',
		'paddingFieldUnitmobile'         => 'px',
		'paddingFieldUnitTablet'         => 'px',
		'fieldIconSize'                  => 12,
		'fieldIconSizeType'              => 'px',
		'fieldIconColor'                 => '#555D66',
		'fieldIconBorderRightWidth'      => 1,
		'fieldIconBorderColor'           => '',
		// checkbox.
		'checkboxSize'                   => 20,
		'checkboxBackgroundColor'        => '',
		'checkboxColor'                  => '',
		'checkboxBorderWidth'            => 1,
		'checkboxBorderRadius'           => 2,
		'checkboxBorderColor'            => '',
		'checkboxGlowEnable'             => true,
		'checkboxGlowColor'              => '#2271b1',

		// register styling.
		'registerButtonSize'             => 'default',
		'registerPaddingBtnTop'          => '',
		'registerPaddingBtnRight'        => '',
		'registerPaddingBtnBottom'       => '',
		'registerPaddingBtnLeft'         => '',
		'registerPaddingBtnTopTablet'    => '12',
		'registerPaddingBtnRightTablet'  => '24',
		'registerPaddingBtnBottomTablet' => '12',
		'registerPaddingBtnLeftTablet'   => '24',
		'registerPaddingBtnTopMobile'    => '',
		'registerPaddingBtnRightMobile'  => '',
		'registerPaddingBtnBottomMobile' => '',
		'registerPaddingBtnLeftMobile'   => '',
		'registerPaddingBtnUnit'         => 'px',
		'registerMobilePaddingBtnUnit'   => 'px',
		'registerTabletPaddingBtnUnit'   => 'px',
		'registerBtnColor'               => '',
		'registerBtnColorHover'          => '',
		'registerBtnBgColor'             => '',
		'registerBtnBgColorHover'        => '',
		'registerBtnloadGoogleFonts'     => false,
		'registerBtnFontFamily'          => 'Default',
		'registerBtnFontWeight'          => '',
		'registerBtnFontSize'            => '',
		'registerBtnFontSizeType'        => 'px',
		'registerBtnFontSizeTablet'      => '',
		'registerBtnFontSizeMobile'      => '',
		'registerBtnLineHeight'          => '',
		'registerBtnLineHeightType'      => 'em',
		'registerBtnLineHeightTablet'    => '',
		'registerBtnLineHeightMobile'    => '',
		'registerBtnFontStyle'           => '',
		'registerBtnLetterSpacing'       => '',
		'registerBtnLetterSpacingTablet' => '',
		'registerBtnLetterSpacingMobile' => '',
		'registerBtnLetterSpacingType'   => 'px',
		'registerBtnTransform'           => '',
		'registerBtnDecoration'          => '',

		// Register Button Icon.
		'ctaIcon'                        => '',
		'ctaIconPosition'                => 'after',
		'ctaIconSpace'                   => 5,
		'ctaIconSpaceTablet'             => '',
		'ctaIconSpaceMobile'             => '',
		'ctaIconSpaceType'               => 'px',



		// message.
		'errorMessageBackground'         => '#f8d7da',
		'errorMessageColor'              => '#721c24',
		'errorMessageBorderColor'        => '#ff0000',
		'errorFieldColor'                => '#ff0000',
		'successMessageBackground'       => '#d4edda',
		'successMessageColor'            => '#155724',
		'successMessageBorderColor'      => '#008000',

		// error message.
		'messageInvalidEmailError'       => __( 'You have used an invalid email.', 'spectra-pro' ),
		'messageEmailMissingError'       => __( 'Please enter a valid email address.', 'spectra-pro' ),
		'messageEmailAlreadyUsedError'   => __( 'Email already in use. Please try to sign in.', 'spectra-pro' ),
		'messageInvalidUsernameError'    => __( 'Invalid user name. Please try again.', 'spectra-pro' ),
		'messageUsernameAlreadyUsed'     => __( 'Username is already taken.', 'spectra-pro' ),
		'messageInvalidPasswordError'    => __( 'Password cannot be accepted. Please try something else.', 'spectra-pro' ),
		'messagePasswordConfirmError'    => __( 'Passwords do not match.', 'spectra-pro' ),
		'messageTermsError'              => __( 'Please try again after accepting terms & conditions.', 'spectra-pro' ),
		'messageOtherError'              => __( 'Something went wrong! Please try again.', 'spectra-pro' ),
		'messageSuccessRegistration'     => __( 'Registration successful. Please check your email inbox.', 'spectra-pro' ),

		// field border defaults.
		'fieldBorderHColor'              => '',
	),
	$form__border_attribute,
	$register__border_attribute,
	$input_border_attribute,
	array(
		'formBorderStyle'  => 'default',
		'fieldBorderStyle' => 'default',
		'btnBorderStyle'   => 'default',
	)
);
