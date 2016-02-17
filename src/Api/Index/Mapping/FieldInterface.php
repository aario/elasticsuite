<?php
/**
 * DISCLAIMER :
 *
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile_ElasticSuite
 * @package   Smile\ElasticSuiteCore
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticSuiteCore\Api\Index\Mapping;

/**
 * Representation of a ElasticSearch field (abstraction of mapping properties).
 *
 * @category Smile_ElasticSuite
 * @package  Smile\ElasticSuiteCore
 * @author   Aurelien FOUCRET <aurelien.foucret@smile.fr>
 */
interface FieldInterface
{
    /**
     * Field types declaration.
     *
     */

    const FIELD_TYPE_STRING  = 'string';
    const FIELD_TYPE_DOUBLE  = 'double';
    const FIELD_TYPE_INTEGER = 'integer';
    const FIELD_TYPE_DATE    = 'date';
    const FIELD_TYPE_BOOLEAN = 'boolean';
    const FIELD_TYPE_NESTED  = 'nested';
    const FIELD_TYPE_MULTI   = 'multi_field';

    /**
     * Analyzers declarations.
     */

    const ANALYZER_STANDARD   = 'standard';
    const ANALYZER_WHITESPACE = 'whitespace';
    const ANALYZER_SHINGLE    = 'shingle';
    const ANALYZER_SORTABLE   = 'sortable';
    const ANALYZER_EDGE_NGRAM = 'edge_ngram_front';
    const ANALYZER_UNTOUCHED  = 'untouched';

    /**
     * Field name.
     *
     * @return string
     */
    public function getName();

    /**
     * Field type (eg: string, integer, date).
     * See const above for available types.
     *
     * @return string
     */
    public function getType();

    /**
     * Is the field searchable.
     *
     * @return boolean
     */
    public function isSearchable();

    /**
     * Is the field filterable in navigation.
     *
     * @return boolean
     */
    public function isFilterable();

    /**
     * Is the field filterable in search.
     *
     * @return boolean
     */
    public function isFilterableInSearch();

    /**
     * Is the field used by the spellchecker.
     *
     * @return boolean
     */
    public function isUsedInSpellcheck();

    /**
     * Is the field used for autocomplete.
     *
     * @return boolean
     */
    public function isUsedInAutocomplete();

    /**
     * Weight of the fields in search.
     *
     * @return integer
     */
    public function getSearchWeight();

    /**
     * Return true if the field has a nested path.
     *
     * @return boolean
     */
    public function isNested();

    /**
     * @return string
     */
    public function getNestedPath();

    /**
     * @return string;
     */
    public function getNestedFieldName();

    /**
     * Return ES mapping properties associated with the field.
     *
     * @return array
     */
    public function getMappingPropertyConfig();
}
