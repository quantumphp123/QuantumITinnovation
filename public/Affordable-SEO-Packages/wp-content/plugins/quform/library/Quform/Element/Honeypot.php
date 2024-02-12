<?php

/**
 * @copyright Copyright (c) 2009-2018 ThemeCatcher (http://www.themecatcher.net)
 */
class Quform_Element_Honeypot extends Quform_Element_Field
{
    /**
     * Render this field and return the HTML
     *
     * @param   array   $context
     * @return  string
     */
    public function render(array $context = array())
    {
        $output = '<div class="quform-element-tree">';

        $output .= sprintf(
            '<label for="%s">%s</label>',
            esc_attr($this->getUniqueId()),
            esc_html__('This field should be left blank', 'quform')
        );

        $output .= $this->getFieldHtml($context);

        $output .= '</div>';

        return $output;
    }

    /**
     * Get the HTML attributes for the field
     *
     * @param   array  $context
     * @return  array
     */
    protected function getFieldAttributes(array $context = array())
    {
        $attributes = array(
            'type' => 'text',
            'id' => $this->getUniqueId(),
            'name' => $this->getFullyQualifiedName(),
            'class' => Quform::sanitizeClass($this->getFieldClasses($context)),
            'tabindex' => '-1',
            'autocomplete' => 'off'
        );

        $attributes = apply_filters('quform_field_attributes', $attributes, $this, $this->form, $context);
        $attributes = apply_filters('quform_field_attributes_' . $this->getIdentifier(), $attributes, $this, $this->form, $context);

        return $attributes;
    }

    /**
     * Get the classes for the field
     *
     * @param   array  $context
     * @return  array
     */
    protected function getFieldClasses(array $context = array())
    {
        $classes = array(
            'quform-field',
            'quform-field-tree',
            sprintf('quform-field-%s', $this->getIdentifier())
        );

        $classes = apply_filters('quform_field_classes', $classes, $this, $this->form, $context);
        $classes = apply_filters('quform_field_classes_' . $this->getIdentifier(), $classes, $this, $this->form, $context);

        return $classes;
    }

    /**
     * Get the HTML for the field
     *
     * @param   array $context
     * @return  string
     */
    protected function getFieldHtml(array $context = array())
    {
        return Quform::getHtmlTag('input', $this->getFieldAttributes($context));
    }

    /**
     * Get the default element configuration
     *
     * @return array
     */
    public static function getDefaultConfig()
    {
        return apply_filters('quform_default_config_honeypot', array(
            'showInEmail' => false,
            'saveToDatabase' => false
        ));
    }
}
