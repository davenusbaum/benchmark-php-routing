<?php return array (
  'addon' => 
  array (
    '>' => 
    array (
      0 => 
      array (
        0 => 'GET',
        1 => 'addon',
      ),
    ),
    'linkers' => 
    array (
      '>' => 
      array (
        0 => 
        array (
          0 => 'GET',
          1 => 'addon_linkers',
        ),
      ),
      '}' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'addon_linkers_linker_key',
          ),
        ),
        'values' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'addon_linkers_linker_key_values',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'addon_linkers_linker_key_values_value_id',
              ),
            ),
          ),
          '{' => '{value_id}',
        ),
      ),
      '{' => '{linker_key}',
    ),
  ),
  'hook_events' => 
  array (
    '>' => 
    array (
      0 => 
      array (
        0 => 'GET',
        1 => 'hook_events',
      ),
    ),
    '}' => 
    array (
      '>' => 
      array (
        0 => 
        array (
          0 => 'GET',
          1 => 'hook_events_subject_type',
        ),
      ),
    ),
    '{' => '{subject_type}',
  ),
  'pullrequests' => 
  array (
    '}' => 
    array (
      '>' => 
      array (
        0 => 
        array (
          0 => 'GET',
          1 => 'pullrequests_selected_user',
        ),
      ),
    ),
    '{' => '{selected_user}',
  ),
  'repositories' => 
  array (
    '>' => 
    array (
      0 => 
      array (
        0 => 'GET',
        1 => 'repositories',
      ),
    ),
    '}' => 
    array (
      '>' => 
      array (
        0 => 
        array (
          0 => 'GET',
          1 => 'repositories_workspace',
        ),
      ),
      '}' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'repositories_workspace_repo_slug',
          ),
        ),
        'branch-restrictions' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_branch_restrictions',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_branch_restrictions_id',
              ),
            ),
          ),
          '{' => '{id}',
        ),
        'branching-model' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_branching_model',
            ),
          ),
          'settings' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_branching_model_settings',
              ),
            ),
          ),
        ),
        'commit' => 
        array (
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_commit_commit',
              ),
            ),
            'approve' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_commit_commit_approve',
                ),
              ),
            ),
            'comments' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_commit_commit_comments',
                ),
              ),
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id',
                  ),
                ),
              ),
              '{' => '{comment_id}',
            ),
            'properties' => 
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
                      1 => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name',
                    ),
                  ),
                ),
                '{' => '{property_name}',
              ),
              '{' => '{app_key}',
            ),
            'pullrequests' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_commit_commit_pullrequests',
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
                  1 => 'repositories_workspace_repo_slug_commit_commit_reports',
                ),
              ),
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_commit_commit_reports_reportId',
                  ),
                ),
                'annotations' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations',
                    ),
                  ),
                  '}' => 
                  array (
                    '>' => 
                    array (
                      0 => 
                      array (
                        0 => 'GET',
                        1 => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId',
                      ),
                    ),
                  ),
                  '{' => '{annotationId}',
                ),
              ),
              '{' => '{reportId}',
            ),
            'statuses' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_commit_commit_statuses',
                ),
              ),
              'build' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_commit_commit_statuses_build',
                  ),
                ),
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key',
                    ),
                  ),
                ),
                '{' => '{key}',
              ),
            ),
          ),
          '{' => '{commit}',
        ),
        'commits' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_commits',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_commits_revision',
              ),
            ),
          ),
          '{' => '{revision}',
        ),
        'components' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_components',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_components_component_id',
              ),
            ),
          ),
          '{' => '{component_id}',
        ),
        'default-reviewers' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_default_reviewers',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_default_reviewers_target_username',
              ),
            ),
          ),
          '{' => '{target_username}',
        ),
        'deploy-keys' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_deploy_keys',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_deploy_keys_key_id',
              ),
            ),
          ),
          '{' => '{key_id}',
        ),
        'deployments' => 
        array (
          '' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_deployments',
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
                1 => 'repositories_workspace_repo_slug_deployments_deployment_uuid',
              ),
            ),
          ),
          '{' => '{deployment_uuid}',
        ),
        'deployments_config' => 
        array (
          'environments' => 
          array (
            '}' => 
            array (
              'variables' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables',
                  ),
                ),
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid',
                    ),
                  ),
                ),
                '{' => '{variable_uuid}',
              ),
            ),
            '{' => '{environment_uuid}',
          ),
        ),
        'diff' => 
        array (
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_diff_spec',
              ),
            ),
          ),
          '{' => '{spec}',
        ),
        'diffstat' => 
        array (
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_diffstat_spec',
              ),
            ),
          ),
          '{' => '{spec}',
        ),
        'downloads' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_downloads',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_downloads_filename',
              ),
            ),
          ),
          '{' => '{filename}',
        ),
        'environments' => 
        array (
          '' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_environments',
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
                1 => 'repositories_workspace_repo_slug_environments_environment_uuid',
              ),
            ),
            'changes' => 
            array (
              '' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_environments_environment_uuid_changes',
                  ),
                ),
              ),
            ),
          ),
          '{' => '{environment_uuid}',
        ),
        'filehistory' => 
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
                  1 => 'repositories_workspace_repo_slug_filehistory_commit_path',
                ),
              ),
            ),
            '{' => '{path}',
          ),
          '{' => '{commit}',
        ),
        'forks' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_forks',
            ),
          ),
        ),
        'hooks' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_hooks',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_hooks_uid',
              ),
            ),
          ),
          '{' => '{uid}',
        ),
        'issues' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_issues',
            ),
          ),
          'export' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_issues_export',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip',
                ),
              ),
            ),
            '{' => '{repo_name}-issues-{task_id}.zip',
          ),
          'import' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_issues_import',
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
                1 => 'repositories_workspace_repo_slug_issues_issue_id',
              ),
            ),
            'attachments' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_issues_issue_id_attachments',
                ),
              ),
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path',
                  ),
                ),
              ),
              '{' => '{path}',
            ),
            'changes' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_issues_issue_id_changes',
                ),
              ),
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id',
                  ),
                ),
              ),
              '{' => '{change_id}',
            ),
            'comments' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_issues_issue_id_comments',
                ),
              ),
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id',
                  ),
                ),
              ),
              '{' => '{comment_id}',
            ),
            'vote' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_issues_issue_id_vote',
                ),
              ),
            ),
            'watch' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_issues_issue_id_watch',
                ),
              ),
            ),
          ),
          '{' => '{issue_id}',
        ),
        'merge-base' => 
        array (
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_merge_base_revspec',
              ),
            ),
          ),
          '{' => '{revspec}',
        ),
        'milestones' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_milestones',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_milestones_milestone_id',
              ),
            ),
          ),
          '{' => '{milestone_id}',
        ),
        'patch' => 
        array (
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_patch_spec',
              ),
            ),
          ),
          '{' => '{spec}',
        ),
        'pipelines-config' => 
        array (
          'caches' => 
          array (
            '' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pipelines_config_caches',
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
                  1 => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid',
                ),
              ),
              'content-uri' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri',
                  ),
                ),
              ),
            ),
            '{' => '{cache_uuid}',
          ),
        ),
        'pipelines' => 
        array (
          '' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_pipelines',
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
                1 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid',
              ),
            ),
            'steps' => 
            array (
              '' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps',
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
                    1 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid',
                  ),
                ),
                'log' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log',
                    ),
                  ),
                ),
                'logs' => 
                array (
                  '}' => 
                  array (
                    '>' => 
                    array (
                      0 => 
                      array (
                        0 => 'GET',
                        1 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid',
                      ),
                    ),
                  ),
                  '{' => '{log_uuid}',
                ),
                'test_reports' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports',
                    ),
                  ),
                  'test_cases' => 
                  array (
                    '>' => 
                    array (
                      0 => 
                      array (
                        0 => 'GET',
                        1 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases',
                      ),
                    ),
                    '}' => 
                    array (
                      'test_case_reasons' => 
                      array (
                        '>' => 
                        array (
                          0 => 
                          array (
                            0 => 'GET',
                            1 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons',
                          ),
                        ),
                      ),
                    ),
                    '{' => '{test_case_uuid}',
                  ),
                ),
              ),
              '{' => '{step_uuid}',
            ),
            'stopPipeline' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline',
                ),
              ),
            ),
          ),
          '{' => '{pipeline_uuid}',
        ),
        'pipelines_config' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_pipelines_config',
            ),
          ),
          'build_number' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_pipelines_config_build_number',
              ),
            ),
          ),
          'schedules' => 
          array (
            '' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pipelines_config_schedules',
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
                  1 => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid',
                ),
              ),
              'executions' => 
              array (
                '' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions',
                    ),
                  ),
                ),
              ),
            ),
            '{' => '{schedule_uuid}',
          ),
          'ssh' => 
          array (
            'key_pair' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair',
                ),
              ),
            ),
            'known_hosts' => 
            array (
              '' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts',
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
                    1 => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid',
                  ),
                ),
              ),
              '{' => '{known_host_uuid}',
            ),
          ),
          'variables' => 
          array (
            '' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pipelines_config_variables',
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
                  1 => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid',
                ),
              ),
            ),
            '{' => '{variable_uuid}',
          ),
        ),
        'properties' => 
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
                  1 => 'repositories_workspace_repo_slug_properties_app_key_property_name',
                ),
              ),
            ),
            '{' => '{property_name}',
          ),
          '{' => '{app_key}',
        ),
        'pullrequests' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_pullrequests',
            ),
          ),
          'activity' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_pullrequests_activity',
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
                1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id',
              ),
            ),
            'activity' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity',
                ),
              ),
            ),
            'approve' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve',
                ),
              ),
            ),
            'comments' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments',
                ),
              ),
              '}' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id',
                  ),
                ),
              ),
              '{' => '{comment_id}',
            ),
            'commits' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits',
                ),
              ),
            ),
            'decline' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline',
                ),
              ),
            ),
            'diff' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff',
                ),
              ),
            ),
            'diffstat' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat',
                ),
              ),
            ),
            'merge' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge',
                ),
              ),
              'task-status' => 
              array (
                '}' => 
                array (
                  '>' => 
                  array (
                    0 => 
                    array (
                      0 => 'GET',
                      1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id',
                    ),
                  ),
                ),
                '{' => '{task_id}',
              ),
            ),
            'patch' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch',
                ),
              ),
            ),
            'request-changes' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes',
                ),
              ),
            ),
            'statuses' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses',
                ),
              ),
            ),
            'properties' => 
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
                      1 => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name',
                    ),
                  ),
                ),
                '{' => '{property_name}',
              ),
              '{' => '{app_key}',
            ),
          ),
          '{' => '{pull_request_id}',
        ),
        'refs' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_refs',
            ),
          ),
          'branches' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_refs_branches',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_refs_branches_name',
                ),
              ),
            ),
            '{' => '{name}',
          ),
          'tags' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_refs_tags',
              ),
            ),
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'repositories_workspace_repo_slug_refs_tags_name',
                ),
              ),
            ),
            '{' => '{name}',
          ),
        ),
        'src' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_src',
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
                  1 => 'repositories_workspace_repo_slug_src_commit_path',
                ),
              ),
            ),
            '{' => '{path}',
          ),
          '{' => '{commit}',
        ),
        'versions' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_versions',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'repositories_workspace_repo_slug_versions_version_id',
              ),
            ),
          ),
          '{' => '{version_id}',
        ),
        'watchers' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'repositories_workspace_repo_slug_watchers',
            ),
          ),
        ),
      ),
      '{' => '{repo_slug}',
    ),
    '{' => '{workspace}',
  ),
  'snippets' => 
  array (
    '>' => 
    array (
      0 => 
      array (
        0 => 'GET',
        1 => 'snippets',
      ),
    ),
    '}' => 
    array (
      '>' => 
      array (
        0 => 
        array (
          0 => 'GET',
          1 => 'snippets_workspace',
        ),
      ),
      '}' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'snippets_workspace_encoded_id',
          ),
        ),
        'comments' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'snippets_workspace_encoded_id_comments',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'snippets_workspace_encoded_id_comments_comment_id',
              ),
            ),
          ),
          '{' => '{comment_id}',
        ),
        'commits' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'snippets_workspace_encoded_id_commits',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'snippets_workspace_encoded_id_commits_revision',
              ),
            ),
          ),
          '{' => '{revision}',
        ),
        'files' => 
        array (
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'snippets_workspace_encoded_id_files_path',
              ),
            ),
          ),
          '{' => '{path}',
        ),
        'watch' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'snippets_workspace_encoded_id_watch',
            ),
          ),
        ),
        'watchers' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'snippets_workspace_encoded_id_watchers',
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
              1 => 'snippets_workspace_encoded_id_node_id',
            ),
          ),
          'files' => 
          array (
            '}' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'snippets_workspace_encoded_id_node_id_files_path',
                ),
              ),
            ),
            '{' => '{path}',
          ),
          'diff' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'snippets_workspace_encoded_id_revision_diff',
              ),
            ),
          ),
          'patch' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'snippets_workspace_encoded_id_revision_patch',
              ),
            ),
          ),
        ),
        '{' => '{node_id}',
      ),
      '{' => '{encoded_id}',
    ),
    '{' => '{workspace}',
  ),
  'teams' => 
  array (
    '>' => 
    array (
      0 => 
      array (
        0 => 'GET',
        1 => 'teams',
      ),
    ),
    '}' => 
    array (
      '>' => 
      array (
        0 => 
        array (
          0 => 'GET',
          1 => 'teams_username',
        ),
      ),
      'followers' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'teams_username_followers',
          ),
        ),
      ),
      'following' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'teams_username_following',
          ),
        ),
      ),
      'members' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'teams_username_members',
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
            1 => 'teams_username_permissions',
          ),
        ),
        'repositories' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'teams_username_permissions_repositories',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'teams_username_permissions_repositories_repo_slug',
              ),
            ),
          ),
          '{' => '{repo_slug}',
        ),
      ),
      'pipelines_config' => 
      array (
        'variables' => 
        array (
          '' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'teams_username_pipelines_config_variables',
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
                1 => 'teams_username_pipelines_config_variables_variable_uuid',
              ),
            ),
          ),
          '{' => '{variable_uuid}',
        ),
      ),
      'projects' => 
      array (
        '' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'teams_username_projects',
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
              1 => 'teams_username_projects_project_key',
            ),
          ),
        ),
        '{' => '{project_key}',
      ),
      'search' => 
      array (
        'code' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'teams_username_search_code',
            ),
          ),
        ),
      ),
      'repositories' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'teams_workspace_repositories',
          ),
        ),
      ),
    ),
    '{' => '{username}',
  ),
  'user' => 
  array (
    '>' => 
    array (
      0 => 
      array (
        0 => 'GET',
        1 => 'user',
      ),
    ),
    'emails' => 
    array (
      '>' => 
      array (
        0 => 
        array (
          0 => 'GET',
          1 => 'user_emails',
        ),
      ),
      '}' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'user_emails_email',
          ),
        ),
      ),
      '{' => '{email}',
    ),
    'permissions' => 
    array (
      'repositories' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'user_permissions_repositories',
          ),
        ),
      ),
      'teams' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'user_permissions_teams',
          ),
        ),
      ),
      'workspaces' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'user_permissions_workspaces',
          ),
        ),
      ),
    ),
  ),
  'users' => 
  array (
    '}' => 
    array (
      '>' => 
      array (
        0 => 
        array (
          0 => 'GET',
          1 => 'users_selected_user',
        ),
      ),
      'pipelines_config' => 
      array (
        'variables' => 
        array (
          '' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'users_selected_user_pipelines_config_variables',
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
                1 => 'users_selected_user_pipelines_config_variables_variable_uuid',
              ),
            ),
          ),
          '{' => '{variable_uuid}',
        ),
      ),
      'properties' => 
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
                1 => 'users_selected_user_properties_app_key_property_name',
              ),
            ),
          ),
          '{' => '{property_name}',
        ),
        '{' => '{app_key}',
      ),
      'search' => 
      array (
        'code' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'users_selected_user_search_code',
            ),
          ),
        ),
      ),
      'ssh-keys' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'users_selected_user_ssh_keys',
          ),
        ),
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'users_selected_user_ssh_keys_key_id',
            ),
          ),
        ),
        '{' => '{key_id}',
      ),
      'members' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'users_username_members',
          ),
        ),
      ),
      'repositories' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'users_workspace_repositories',
          ),
        ),
      ),
    ),
    '{' => '{selected_user}',
  ),
  'workspaces' => 
  array (
    '>' => 
    array (
      0 => 
      array (
        0 => 'GET',
        1 => 'workspaces',
      ),
    ),
    '}' => 
    array (
      '>' => 
      array (
        0 => 
        array (
          0 => 'GET',
          1 => 'workspaces_workspace',
        ),
      ),
      'hooks' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'workspaces_workspace_hooks',
          ),
        ),
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'workspaces_workspace_hooks_uid',
            ),
          ),
        ),
        '{' => '{uid}',
      ),
      'members' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'workspaces_workspace_members',
          ),
        ),
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'workspaces_workspace_members_member',
            ),
          ),
        ),
        '{' => '{member}',
      ),
      'permissions' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'workspaces_workspace_permissions',
          ),
        ),
        'repositories' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'workspaces_workspace_permissions_repositories',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'workspaces_workspace_permissions_repositories_repo_slug',
              ),
            ),
          ),
          '{' => '{repo_slug}',
        ),
      ),
      'pipelines-config' => 
      array (
        'identity' => 
        array (
          'oidc' => 
          array (
            '.well-known' => 
            array (
              'openid-configuration' => 
              array (
                '>' => 
                array (
                  0 => 
                  array (
                    0 => 'GET',
                    1 => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration',
                  ),
                ),
              ),
            ),
            'keys.json' => 
            array (
              '>' => 
              array (
                0 => 
                array (
                  0 => 'GET',
                  1 => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json',
                ),
              ),
            ),
          ),
        ),
        'variables' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'workspaces_workspace_pipelines_config_variables',
            ),
          ),
          '}' => 
          array (
            '>' => 
            array (
              0 => 
              array (
                0 => 'GET',
                1 => 'workspaces_workspace_pipelines_config_variables_variable_uuid',
              ),
            ),
          ),
          '{' => '{variable_uuid}',
        ),
      ),
      'projects' => 
      array (
        '>' => 
        array (
          0 => 
          array (
            0 => 'GET',
            1 => 'workspaces_workspace_projects',
          ),
        ),
        '}' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'workspaces_workspace_projects_project_key',
            ),
          ),
        ),
        '{' => '{project_key}',
      ),
      'search' => 
      array (
        'code' => 
        array (
          '>' => 
          array (
            0 => 
            array (
              0 => 'GET',
              1 => 'workspaces_workspace_search_code',
            ),
          ),
        ),
      ),
    ),
    '{' => '{workspace}',
  ),
);