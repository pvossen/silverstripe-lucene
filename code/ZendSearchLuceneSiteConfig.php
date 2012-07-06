<?php

/**
 * Adds a button the Site Config page of the CMS to rebuild the Lucene search index.
 * 
 * @package lucene-silverstripe-module
 * @author Darren Inwood <darren.inwood@chrometoaster.com>
 */
 
class ZendSearchLuceneSiteConfig extends DataExtension {

    /**
     * Adds a button the Site Config page of the CMS to rebuild the Lucene search index.
     */
    public function updateCMSActions(FieldList $fields) {
/*        $actions->push(
            new InlineFormAction(
                'rebuildZendSearchLuceneIndex',
                _t('ZendSearchLuceneSiteConfig.RebuildIndexButtonText', 'Rebuild Search Index')
            )
        );
*/
    }

}

