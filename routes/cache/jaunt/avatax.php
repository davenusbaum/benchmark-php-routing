<?php return array (
  'api' => 
  array (
    'v2' => 
    array (
      'accounts' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_accounts',
          ),
        ),
        'ListAccountsByTssWriteMode' => 
        array (
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_ListAccountsByTssWriteMode_writeMode',
              ),
            ),
          ),
          '{' => '{writeMode}',
        ),
        'freetrials' => 
        array (
          'request' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_freetrials_request',
              ),
            ),
          ),
        ),
        'request' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_accounts_request',
            ),
          ),
        ),
        '}' => 
        array (
          'jurisdictionoverrides' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_accountId_jurisdictionoverrides',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_accounts_accountId_jurisdictionoverrides_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'subscriptions' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_accountId_subscriptions',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_accounts_accountId_subscriptions_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'users' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_accountId_users',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_accounts_accountId_users_id',
                ),
              ),
              'entitlements' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_accounts_accountId_users_id_entitlements',
                  ),
                ),
              ),
            ),
            '{' => '{id}',
          ),
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_accounts_id',
            ),
          ),
          'activate' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_id_activate',
              ),
            ),
          ),
          'audit' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_id_audit',
              ),
            ),
          ),
          'configuration' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_id_configuration',
              ),
            ),
          ),
          'entitlements' => 
          array (
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_accounts_id_entitlements_offer',
                ),
              ),
            ),
            '{' => '{offer}',
          ),
          'licensekey' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_id_licensekey',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_accounts_id_licensekey_licensekeyname',
                ),
              ),
            ),
            '{' => '{licensekeyname}',
          ),
          'licensekeys' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_id_licensekeys',
              ),
            ),
          ),
          'resetlicensekey' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_accounts_id_resetlicensekey',
              ),
            ),
          ),
        ),
        '{' => '{accountId}',
      ),
      'addresses' => 
      array (
        'resolve' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_addresses_resolve',
            ),
          ),
        ),
      ),
      'advancedrules' => 
      array (
        'accounts' => 
        array (
          '}' => 
          array (
            'companies' => 
            array (
              '}' => 
              array (
                'lookupFiles' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_advancedrules_accounts_accountId_companies_companyId_lookupFiles',
                    ),
                  ),
                ),
              ),
              '{' => '{companyId}',
            ),
            'lookupFiles' => 
            array (
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_advancedrules_accounts_accountId_lookupFiles_id',
                  ),
                ),
              ),
              '{' => '{id}',
            ),
          ),
          '{' => '{accountId}',
        ),
      ),
      'avafileforms' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_avafileforms',
          ),
        ),
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_avafileforms_id',
            ),
          ),
        ),
        '{' => '{id}',
      ),
      'batches' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_batches',
          ),
        ),
      ),
      'companies' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_companies',
          ),
        ),
        'initialize' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_companies_initialize',
            ),
          ),
        ),
        'mrs' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_companies_mrs',
            ),
          ),
        ),
        'transactions' => 
        array (
          'lines' => 
          array (
            'add' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_transactions_lines_add',
                ),
              ),
            ),
            'delete' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_transactions_lines_delete',
                ),
              ),
            ),
          ),
        ),
        '}' => 
        array (
          'transactions' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyCode_transactions',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyCode_transactions_transactionCode',
                ),
              ),
              'adjust' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_adjust',
                  ),
                ),
              ),
              'audit' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_audit',
                  ),
                ),
              ),
              'changecode' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_changecode',
                  ),
                ),
              ),
              'commit' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_commit',
                  ),
                ),
              ),
              'lock' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_lock',
                  ),
                ),
              ),
              'refund' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_refund',
                  ),
                ),
              ),
              'settle' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_settle',
                  ),
                ),
              ),
              'types' => 
              array (
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyCode_transactions_transactionCode_types_documentType',
                    ),
                  ),
                  'audit' => 
                  array (
                    '>' => 
                    array (
                      0 => 
                      array (
                        0 => 'GET',
                        1 => 'api_v2_companies_companyCode_transactions_transactionCode_types_documentType_audit',
                      ),
                    ),
                  ),
                ),
                '{' => '{documentType}',
              ),
              'uncommit' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_uncommit',
                  ),
                ),
              ),
              'unvoid' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_unvoid',
                  ),
                ),
              ),
              'verify' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_verify',
                  ),
                ),
              ),
              'void' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyCode_transactions_transactionCode_void',
                  ),
                ),
              ),
            ),
            '{' => '{transactionCode}',
          ),
          'batches' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_batches',
              ),
            ),
            'transactions' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_batches_transactions',
                ),
              ),
            ),
            '}' => 
            array (
              'files' => 
              array (
                '}' => 
                array (
                  'attachment' => 
                  array (
                    '>' => 
                    array (
                      0 => 
                      array (
                        0 => 'GET',
                        1 => 'api_v2_companies_companyId_batches_batchId_files_id_attachment',
                      ),
                    ),
                  ),
                ),
                '{' => '{id}',
              ),
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_batches_id',
                ),
              ),
              'cancel' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_batches_id_cancel',
                  ),
                ),
              ),
            ),
            '{' => '{batchId}',
          ),
          'certexpressinvites' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_certexpressinvites',
              ),
            ),
          ),
          'certificates' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_certificates',
              ),
            ),
            'setup' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_certificates_setup',
                ),
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_certificates_id',
                ),
              ),
              'attachment' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_certificates_id_attachment',
                  ),
                ),
              ),
              'attributes' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_certificates_id_attributes',
                  ),
                ),
                'link' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_certificates_id_attributes_link',
                    ),
                  ),
                ),
                'unlink' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_certificates_id_attributes_unlink',
                    ),
                  ),
                ),
              ),
              'customers' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_certificates_id_customers',
                  ),
                ),
                'link' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_certificates_id_customers_link',
                    ),
                  ),
                ),
                'unlink' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_certificates_id_customers_unlink',
                    ),
                  ),
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'contacts' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_contacts',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_contacts_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'customers' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_customers',
              ),
            ),
            'billto' => 
            array (
              '}' => 
              array (
                'shipto' => 
                array (
                  'link' => 
                  array (
                    '>' => 
                    array (
                      0 => 
                      array (
                        0 => 'GET',
                        1 => 'api_v2_companies_companyId_customers_billto_code_shipto_link',
                      ),
                    ),
                  ),
                ),
              ),
              '{' => '{code}',
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_customers_customerCode',
                ),
              ),
              'attributes' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_customers_customerCode_attributes',
                  ),
                ),
                'link' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_customers_customerCode_attributes_link',
                    ),
                  ),
                ),
                'unlink' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_customers_customerCode_attributes_unlink',
                    ),
                  ),
                ),
              ),
              'certexpressinvites' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_customers_customerCode_certexpressinvites',
                  ),
                ),
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_customers_customerCode_certexpressinvites_id',
                    ),
                  ),
                ),
                '{' => '{id}',
              ),
              'certificates' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_customers_customerCode_certificates',
                  ),
                ),
                'link' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_customers_customerCode_certificates_link',
                    ),
                  ),
                ),
                'unlink' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_customers_customerCode_certificates_unlink',
                    ),
                  ),
                ),
                '}' => 
                array (
                  '}' => 
                  array (
                    '>' => 
                    array (
                      0 => 
                      array (
                        0 => 'GET',
                        1 => 'api_v2_companies_companyId_customers_customerCode_certificates_country_region',
                      ),
                    ),
                  ),
                  '{' => '{region}',
                ),
                '{' => '{country}',
              ),
            ),
            '{' => '{customerCode}',
          ),
          'datasources' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_datasources',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_datasources_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'distancethresholds' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_distancethresholds',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_distancethresholds_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'ecommercetokens' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_ecommercetokens',
              ),
            ),
          ),
          'filingcalendars' => 
          array (
            'Legacy' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_filingcalendars_Legacy',
                ),
              ),
            ),
            'edit' => 
            array (
              'cycleSafeOptions' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_filingcalendars_edit_cycleSafeOptions',
                  ),
                ),
              ),
            ),
            '}' => 
            array (
              'setting' => 
              array (
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_filingcalendars_filingCalendarId_setting_companyReturnSettingId',
                    ),
                  ),
                ),
                '{' => '{companyReturnSettingId}',
              ),
            ),
            '{' => '{filingCalendarId}',
          ),
          'filings' => 
          array (
            'accrual' => 
            array (
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_filings_accrual_filingReturnId',
                  ),
                ),
              ),
              '{' => '{filingReturnId}',
            ),
            'returns' => 
            array (
              'filed' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_filings_returns_filed',
                  ),
                ),
              ),
            ),
          ),
          'funding' => 
          array (
            'configuration' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_funding_configuration',
                ),
              ),
            ),
            'configurations' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_funding_configurations',
                ),
              ),
            ),
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_id_funding',
              ),
            ),
            'setup' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_id_funding_setup',
                ),
              ),
            ),
          ),
          'items' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_items',
              ),
            ),
            'bytags' => 
            array (
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_items_bytags_tag',
                  ),
                ),
              ),
              '{' => '{tag}',
            ),
            'sync' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_items_sync',
                ),
              ),
            ),
            'upload' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_items_upload',
                ),
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_items_id',
                ),
              ),
              'classifications' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_items_itemId_classifications',
                  ),
                ),
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_items_itemId_classifications_id',
                    ),
                  ),
                ),
                '{' => '{id}',
              ),
              'parameters' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_items_itemId_parameters',
                  ),
                ),
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_items_itemId_parameters_id',
                    ),
                  ),
                ),
                '{' => '{id}',
              ),
              'tags' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_items_itemId_tags',
                  ),
                ),
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_items_itemId_tags_itemTagDetailId',
                    ),
                  ),
                ),
                '{' => '{itemTagDetailId}',
              ),
            ),
            '{' => '{id}',
          ),
          'locations' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_locations',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_locations_id',
                ),
              ),
              'pointofsaledata' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_locations_id_pointofsaledata',
                  ),
                ),
              ),
              'validate' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_locations_id_validate',
                  ),
                ),
              ),
              'parameters' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_locations_locationId_parameters',
                  ),
                ),
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_locations_locationId_parameters_id',
                    ),
                  ),
                ),
                '{' => '{id}',
              ),
            ),
            '{' => '{id}',
          ),
          'nexus' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_nexus',
              ),
            ),
            'byTaxTypeGroup' => 
            array (
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_nexus_byTaxTypeGroup_taxTypeGroup',
                  ),
                ),
              ),
              '{' => '{taxTypeGroup}',
            ),
            'byaddress' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_nexus_byaddress',
                ),
              ),
            ),
            'byform' => 
            array (
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_nexus_byform_formCode',
                  ),
                ),
              ),
              '{' => '{formCode}',
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_nexus_id',
                ),
              ),
              'parameters' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_nexus_nexusId_parameters',
                  ),
                ),
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_companies_companyId_nexus_nexusId_parameters_id',
                    ),
                  ),
                ),
                '{' => '{id}',
              ),
            ),
            '{' => '{id}',
          ),
          'parameters' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_parameters',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_parameters_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'reports' => 
          array (
            'exportdocumentline' => 
            array (
              'initiate' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_companies_companyId_reports_exportdocumentline_initiate',
                  ),
                ),
              ),
            ),
          ),
          'settings' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_settings',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_settings_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'taxcodes' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_taxcodes',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_taxcodes_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'taxrules' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_taxrules',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_taxrules_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'upcs' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_upcs',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_upcs_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'userdefinedfields' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_companyId_userdefinedfields',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_companies_companyId_userdefinedfields_id',
                ),
              ),
            ),
            '{' => '{id}',
          ),
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_companies_id',
            ),
          ),
          'certify' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_id_certify',
              ),
            ),
          ),
          'configuration' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_id_configuration',
              ),
            ),
          ),
          'filingstatus' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_companies_id_filingstatus',
              ),
            ),
          ),
        ),
        '{' => '{companyCode}',
      ),
      'compliance' => 
      array (
        'taxauthorityjurisdictionrates' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_compliance_taxauthorityjurisdictionrates',
            ),
          ),
        ),
      ),
      'contacts' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_contacts',
          ),
        ),
      ),
      'datasources' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_datasources',
          ),
        ),
      ),
      'definitions' => 
      array (
        'avafileforms' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_avafileforms',
            ),
          ),
        ),
        'certificateattributes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_certificateattributes',
            ),
          ),
        ),
        'certificateexemptreasons' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_certificateexemptreasons',
            ),
          ),
        ),
        'certificateexposurezones' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_certificateexposurezones',
            ),
          ),
        ),
        'classification' => 
        array (
          'parametersusage' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_definitions_classification_parametersusage',
              ),
            ),
          ),
        ),
        'communications' => 
        array (
          'transactiontypes' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_definitions_communications_transactiontypes',
              ),
            ),
            '}' => 
            array (
              'servicetypes' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_definitions_communications_transactiontypes_id_servicetypes',
                  ),
                ),
              ),
            ),
            '{' => '{id}',
          ),
          'tspairs' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_definitions_communications_tspairs',
              ),
            ),
          ),
        ),
        'countries' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_countries',
            ),
          ),
          '}' => 
          array (
            'ratetypes' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_countries_country_ratetypes',
                ),
              ),
            ),
            'regions' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_countries_country_regions',
                ),
              ),
            ),
            'taxtypes' => 
            array (
              '}' => 
              array (
                'taxsubtypes' => 
                array (
                  '}' => 
                  array (
                    'ratetypes' => 
                    array (
                      '>' => 
                      array (
                        0 => 
                        array (
                          0 => 'GET',
                          1 => 'api_v2_definitions_countries_country_taxtypes_taxTypeId_taxsubtypes_taxSubTypeId_ratetypes',
                        ),
                      ),
                    ),
                  ),
                  '{' => '{taxSubTypeId}',
                ),
              ),
              '{' => '{taxTypeId}',
            ),
          ),
          '{' => '{country}',
        ),
        'coverletters' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_coverletters',
            ),
          ),
        ),
        'crossborder' => 
        array (
          'sections' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_definitions_crossborder_sections',
              ),
            ),
          ),
          '}' => 
          array (
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_crossborder_country_hsCode',
                ),
              ),
              'hierarchy' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_definitions_crossborder_country_hsCode_hierarchy',
                  ),
                ),
              ),
            ),
            '{' => '{hsCode}',
          ),
          '{' => '{country}',
        ),
        'currencies' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_currencies',
            ),
          ),
        ),
        'entityusecodes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_entityusecodes',
            ),
          ),
        ),
        'filingcalendars' => 
        array (
          'loginverifiers' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_definitions_filingcalendars_loginverifiers',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_filingcalendars_loginverifiers_form',
                ),
              ),
            ),
            '{' => '{form}',
          ),
        ),
        'filingfrequencies' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_filingfrequencies',
            ),
          ),
        ),
        'jurisdictions' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_jurisdictions',
            ),
          ),
          'countries' => 
          array (
            '}' => 
            array (
              'regions' => 
              array (
                '}' => 
                array (
                  'taxtypes' => 
                  array (
                    '}' => 
                    array (
                      'taxsubtypes' => 
                      array (
                        '}' => 
                        array (
                          '>' => 
                          array (
                            0 => 
                            array (
                              0 => 'GET',
                              1 => 'api_v2_definitions_jurisdictions_countries_country_regions_region_taxtypes_taxTypeId_taxsubtypes_taxSubTypeId',
                            ),
                          ),
                        ),
                        '{' => '{taxSubTypeId}',
                      ),
                    ),
                    '{' => '{taxTypeId}',
                  ),
                ),
                '{' => '{region}',
              ),
            ),
            '{' => '{country}',
          ),
        ),
        'jurisdictionsnearaddress' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_jurisdictionsnearaddress',
            ),
          ),
        ),
        'listallmarketplacelocations' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_listallmarketplacelocations',
            ),
          ),
        ),
        'locationquestions' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_locationquestions',
            ),
          ),
        ),
        'marketplacelocations' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_marketplacelocations',
            ),
          ),
        ),
        'nexus' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_nexus',
            ),
          ),
          'byaddress' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_definitions_nexus_byaddress',
              ),
            ),
          ),
          'byform' => 
          array (
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_nexus_byform_formCode',
                ),
              ),
            ),
            '{' => '{formCode}',
          ),
          'bytaxtypegroup' => 
          array (
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_nexus_bytaxtypegroup_taxTypeGroup',
                ),
              ),
            ),
            '{' => '{taxTypeGroup}',
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_definitions_nexus_country',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_nexus_country_region',
                ),
              ),
            ),
            '{' => '{region}',
          ),
          '{' => '{country}',
        ),
        'nexustaxtypegroups' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_nexustaxtypegroups',
            ),
          ),
        ),
        'noticecustomerfundingoptions' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_noticecustomerfundingoptions',
            ),
          ),
        ),
        'noticecustomertypes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_noticecustomertypes',
            ),
          ),
        ),
        'noticefilingtypes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_noticefilingtypes',
            ),
          ),
        ),
        'noticepriorities' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_noticepriorities',
            ),
          ),
        ),
        'noticereasons' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_noticereasons',
            ),
          ),
        ),
        'noticeresponsibilities' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_noticeresponsibilities',
            ),
          ),
        ),
        'noticerootcauses' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_noticerootcauses',
            ),
          ),
        ),
        'noticestatuses' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_noticestatuses',
            ),
          ),
        ),
        'noticetypes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_noticetypes',
            ),
          ),
        ),
        'parameters' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_parameters',
            ),
          ),
          'byitem' => 
          array (
            '}' => 
            array (
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_definitions_parameters_byitem_companyCode_itemCode',
                  ),
                ),
              ),
              '{' => '{itemCode}',
            ),
            '{' => '{companyCode}',
          ),
        ),
        'parametersusage' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_parametersusage',
            ),
          ),
        ),
        'permissions' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_permissions',
            ),
          ),
        ),
        'postalcodes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_postalcodes',
            ),
          ),
        ),
        'preferredprograms' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_preferredprograms',
            ),
          ),
        ),
        'productclassificationsystems' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_productclassificationsystems',
            ),
          ),
          'bycompany' => 
          array (
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_productclassificationsystems_bycompany_companyCode',
                ),
              ),
            ),
            '{' => '{companyCode}',
          ),
        ),
        'regions' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_regions',
            ),
          ),
        ),
        'resourcefiletypes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_resourcefiletypes',
            ),
          ),
        ),
        'returns' => 
        array (
          'parametersusage' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_definitions_returns_parametersusage',
              ),
            ),
          ),
        ),
        'securityroles' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_securityroles',
            ),
          ),
        ),
        'subscriptiontypes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_subscriptiontypes',
            ),
          ),
        ),
        'tags' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_tags',
            ),
          ),
        ),
        'taxauthorities' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_taxauthorities',
            ),
          ),
        ),
        'taxauthorityforms' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_taxauthorityforms',
            ),
          ),
        ),
        'taxauthoritytypes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_taxauthoritytypes',
            ),
          ),
        ),
        'taxcodes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_taxcodes',
            ),
          ),
        ),
        'taxcodetypes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_taxcodetypes',
            ),
          ),
        ),
        'taxforms' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_taxforms',
            ),
          ),
        ),
        'taxsubtypes' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_taxsubtypes',
            ),
          ),
          'countries' => 
          array (
            '}' => 
            array (
              'taxtypes' => 
              array (
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_definitions_taxsubtypes_countries_country_taxtypes_taxTypeId',
                    ),
                  ),
                ),
                '{' => '{taxTypeId}',
              ),
            ),
            '{' => '{country}',
          ),
          '}' => 
          array (
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_taxsubtypes_jurisdictionCode_region',
                ),
              ),
            ),
            '{' => '{region}',
          ),
          '{' => '{jurisdictionCode}',
        ),
        'taxtypegroups' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_taxtypegroups',
            ),
          ),
        ),
        'taxtypes' => 
        array (
          'countries' => 
          array (
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'api_v2_definitions_taxtypes_countries_country',
                ),
              ),
            ),
            '{' => '{country}',
          ),
        ),
        'unitofbasis' => 
        array (
          'countries' => 
          array (
            '}' => 
            array (
              'taxtypes' => 
              array (
                '}' => 
                array (
                  'taxsubtypes' => 
                  array (
                    '}' => 
                    array (
                      '>' => 
                      array (
                        0 => 
                        array (
                          0 => 'GET',
                          1 => 'api_v2_definitions_unitofbasis_countries_country_taxtypes_taxTypeId_taxsubtypes_taxSubTypeId',
                        ),
                      ),
                    ),
                    '{' => '{taxSubTypeId}',
                  ),
                ),
                '{' => '{taxTypeId}',
              ),
            ),
            '{' => '{country}',
          ),
        ),
        'unitofmeasurements' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_definitions_unitofmeasurements',
            ),
          ),
        ),
      ),
      'distancethresholds' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_distancethresholds',
          ),
        ),
      ),
      'firmclientlinkages' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_firmclientlinkages',
          ),
        ),
        'createandlinkclient' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_firmclientlinkages_createandlinkclient',
            ),
          ),
        ),
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_firmclientlinkages_id',
            ),
          ),
          'approve' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_firmclientlinkages_id_approve',
              ),
            ),
          ),
          'reject' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_firmclientlinkages_id_reject',
              ),
            ),
          ),
          'reset' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_firmclientlinkages_id_reset',
              ),
            ),
          ),
          'revoke' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_firmclientlinkages_id_revoke',
              ),
            ),
          ),
        ),
        '{' => '{id}',
      ),
      'fundingrequests' => 
      array (
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_fundingrequests_id',
            ),
          ),
          'widget' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_fundingrequests_id_widget',
              ),
            ),
          ),
        ),
        '{' => '{id}',
      ),
      'items' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_items',
          ),
        ),
      ),
      'jurisdictionoverrides' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_jurisdictionoverrides',
          ),
        ),
      ),
      'locations' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_locations',
          ),
        ),
      ),
      'nexus' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_nexus',
          ),
        ),
      ),
      'notices' => 
      array (
        'responsibilities' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_notices_responsibilities',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_notices_responsibilities_responsibilityId',
              ),
            ),
          ),
          '{' => '{responsibilityId}',
        ),
        'rootcauses' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_notices_rootcauses',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_notices_rootcauses_rootCauseId',
              ),
            ),
          ),
          '{' => '{rootCauseId}',
        ),
      ),
      'notifications' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_notifications',
          ),
        ),
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_notifications_id',
            ),
          ),
          'dismiss' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_notifications_id_dismiss',
              ),
            ),
          ),
        ),
        '{' => '{id}',
      ),
      'passwords' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_passwords',
          ),
        ),
        '}' => 
        array (
          'reset' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_passwords_userId_reset',
              ),
            ),
          ),
        ),
        '{' => '{userId}',
      ),
      'pointofsaledata' => 
      array (
        'build' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_pointofsaledata_build',
            ),
          ),
        ),
      ),
      'reports' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_reports',
          ),
        ),
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_reports_id',
            ),
          ),
          'attachment' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_reports_id_attachment',
              ),
            ),
          ),
        ),
        '{' => '{id}',
      ),
      'settings' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_settings',
          ),
        ),
      ),
      'subscriptions' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_subscriptions',
          ),
        ),
      ),
      'taxcodes' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_taxcodes',
          ),
        ),
      ),
      'taxrates' => 
      array (
        'byaddress' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_taxrates_byaddress',
            ),
          ),
        ),
        'bypostalcode' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_taxrates_bypostalcode',
            ),
          ),
        ),
      ),
      'taxratesbyzipcode' => 
      array (
        'download' => 
        array (
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_taxratesbyzipcode_download_date',
              ),
            ),
          ),
          '{' => '{date}',
        ),
      ),
      'taxrules' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_taxrules',
          ),
        ),
      ),
      'transactions' => 
      array (
        'create' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_transactions_create',
            ),
          ),
        ),
        'createoradjust' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_transactions_createoradjust',
            ),
          ),
        ),
        'lock' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_transactions_lock',
            ),
          ),
        ),
        'multidocument' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_transactions_multidocument',
            ),
          ),
          'commit' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_transactions_multidocument_commit',
              ),
            ),
          ),
          'verify' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_transactions_multidocument_verify',
              ),
            ),
          ),
          '}' => 
          array (
            'type' => 
            array (
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'api_v2_transactions_multidocument_code_type_type',
                  ),
                ),
                'adjust' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_transactions_multidocument_code_type_type_adjust',
                    ),
                  ),
                ),
                'audit' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_transactions_multidocument_code_type_type_audit',
                    ),
                  ),
                ),
                'refund' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_transactions_multidocument_code_type_type_refund',
                    ),
                  ),
                ),
                'void' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'api_v2_transactions_multidocument_code_type_type_void',
                    ),
                  ),
                ),
              ),
              '{' => '{type}',
            ),
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_transactions_multidocument_id',
              ),
            ),
          ),
          '{' => '{code}',
        ),
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_transactions_id',
            ),
          ),
        ),
        '{' => '{id}',
      ),
      'upcs' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_upcs',
          ),
        ),
      ),
      'users' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'api_v2_users',
          ),
        ),
      ),
      'utilities' => 
      array (
        'ping' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_utilities_ping',
            ),
          ),
        ),
        'subscriptions' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'api_v2_utilities_subscriptions',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'api_v2_utilities_subscriptions_serviceTypeId',
              ),
            ),
          ),
          '{' => '{serviceTypeId}',
        ),
      ),
    ),
  ),
);