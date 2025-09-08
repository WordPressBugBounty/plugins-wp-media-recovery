<?php
/**
 * [Short Description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2025, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 * @since      1.7
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

$mlr       = new Media_Library_Recovery();
$mlr_admin = new MLR_Admin();

$page = isset( $_REQUEST['p'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['p'] ) ) : '';

$prev_page     = ( isset( $page ) && $page > 1 ) ? ( $page - 1 ) : 1;
$next_page     = ( isset( $page ) && $page > 0 ) ? ( $page + 1 ) : 2;
$curr_page     = ( isset( $page ) ) ? (int) $page : 1;
$total_files   = $mlr->get_total_image_files();
$total_pages   = ceil( $total_files / $mlr->results_per_page );
$is_first_page = ( 1 === $curr_page ) ? true : false;
$is_last_page  = ( $curr_page > $total_pages - 1 ) ? true : false;

$prev_page_url = admin_url( $mlr_admin->admin_page . MLR_MEDIA_EXPLORER_SLUG . '&p=' . $prev_page );
$next_page_url = admin_url( $mlr_admin->admin_page . MLR_MEDIA_EXPLORER_SLUG . '&p=' . $next_page );

?>
<div class="mlr-admin">
	<div class="mlr-container">
		<div class="mlr-pro">
			<h4>
				<?php echo esc_html__( 'Get the PRO version today!', 'wp-media-recovery' ); ?>
			</h4>
			<p>
				<?php echo esc_html__( 'The PRO version offers more features, improved performance, and a faster recovery process.', 'wp-media-recovery' ); ?>
			</p>
			<table>
				<tr>
					<th><?php echo esc_html__( 'Feature', 'wp-media-recovery' ); ?></th>
					<th><?php echo esc_html__( 'Free', 'wp-media-recovery' ); ?></th>
					<th><?php echo esc_html__( 'PRO', 'wp-media-recovery' ); ?></th>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Number of files to recover at a time', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( '10', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'unlimited', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Recover media libraries with 10,000+ files as a background process with WP-Cron.', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Change the default wp-content/uploads folder path', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Larger files support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'WordPress multisite support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Media type support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'image-only', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'ALL media', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Post type support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'page & post', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'ALL post types', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Attach media to posts', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'basic', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'with URL mapping and replacement', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Backup your uploads folder', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Better performance and quicker recovery process', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Search, filter, and sort media files', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'basic', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'advanced', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'User-friendly media file explorer', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'default', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'pro', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Priority email support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Regular plugin updates', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'delayed', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'first release', 'wp-media-recovery' ); ?></td>
				</tr>
			</table>
			<p class="button-group">
				<a
					class="button button-primary button-pro"
					href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_table_button"
					target="_blank"
				>
					<?php echo esc_html__( 'GET PRO VERSION', 'wp-media-recovery' ); ?>
				</a>
				<a
					class="button button-primary button-watch-video"
					href="https://www.youtube.com/watch?v=umEs5RTxuyI"
					target="_blank"
				>
					<?php echo esc_html__( 'Watch Video', 'wp-media-recovery' ); ?>
				</a>
			</p>
			<p>&nbsp;</p>
			<p>
				<?php
				printf(
					/* translators: %1$s is replaced with "Need to perform bulk or mass search and replace?" */
					/* translators: %2$s is replaced with "Get the PRO version now" */
					wp_kses( '%1$s %2$s!', 'wp-media-recovery', json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true ) ),
					'<em>' . esc_html__( 'Need to perform background recovery with extended options and improved media explorer?', 'wp-media-recovery' ) . '</em>',
					'<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_table_button" target="_blank"><strong>' . esc_html__( 'Get the PRO version now', 'wp-media-recovery' ) . '</strong></a>'
				);
				?>
			</p>
			<p>
				<iframe 
					height="320" 
					src="https://www.youtube.com/embed/umEs5RTxuyI" 
					title="Media Library Recovery" 
					frameborder="0" 
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
					allowfullscreen>
				</iframe>
			</p>
			<hr />
			<p>
				<?php
				printf(
					/* translators: %1$s is replaced with "Note" */
					wp_kses( '%1$s: Improved media explorer, unlimited files to recover, search, filters, background recovery, and custom options are available only in the PRO version!', 'wp-media-recovery', json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true ) ),
					'<strong>' . esc_html__( 'Note', 'wp-media-recovery' ) . '</strong>'
				);
				?>
			</p>
		</div>
		<div class="mlr-explorer">
			<div class="mlr-explorer-nav">
				<!-- Search Mode -->
				<div class="mlr-explorer-search">
					<div>
						<h5>
							<?php echo esc_html__( 'Search Mode', 'wp-media-recovery' ); ?>
							<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" target="_blank">
								<span class="mlr-status-badge mlr-status-upgrade">
									<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
								</span>
							</a>
						</h5>
						<label for="mlr-search-media-text">
							<input 
								type="text" 
								id="mlr-search-media-text" 
								name="mlr-search-media-text"
								placeholder="<?php echo esc_html__( 'Enter search keywords...', 'wp-media-recovery' ); ?>"
								disabled
							/> 
							<button 
								class="button button-primary" 
								id="mlr-search-media" 
								name="mlr-search-media" 
								disabled
							/>
								<?php echo esc_html__( 'Search', 'wp-media-recovery' ); ?>
							</button>
						</label>
						<small>
							<?php echo esc_html__( 'Use keywords to search media for recovery.', 'wp-media-recovery' ); ?>
						</small>
					</div>
				</div>

				<!-- Filter Mode -->
				<div class="mlr-explorer-filters">
					<!-- Quick Mode -->
					<div>
						<h5>
							<?php echo esc_html__( 'Quick Mode', 'wp-media-recovery' ); ?>
							<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" target="_blank">
								<span class="mlr-status-badge mlr-status-upgrade">
									<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
								</span>
							</a>
						</h5>
						<label for="mlr-enable-infinite-scroll">
							<input type="checkbox" id="mlr-enable-infinite-scroll" name="mlr-enable-infinite-scroll" disabled /> 
							<span>
								<?php echo esc_html__( 'Infinite Scroll', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<small>
							<?php echo esc_html__( 'Enable infinte scroll to show all you items on one page.', 'wp-media-recovery' ); ?>
						</small>
						<label for="mlr-hide-existing-media">
							<input type="checkbox" id="mlr-hide-existing-media" name="" disabled /> 
							<span>
								<?php echo esc_html__( 'Hide Existing Media', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<small>
							<?php echo esc_html__( 'Hide media found on the server and database.', 'wp-media-recovery' ); ?>
						</small>
						<label for="mlr-select-all-media">
							<input type="checkbox" id="mlr-select-all-media" name="mlr-select-all-media" disabled /> 
							<span>
								<?php echo esc_html__( 'Select All', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<small>
							<?php echo esc_html__( 'Select all items available for recovery on this page.', 'wp-media-recovery' ); ?>
						</small>
					</div>

					<!-- Display Mode -->
					<div>
						<h5>
							<?php echo esc_html__( 'Display Mode', 'wp-media-recovery' ); ?>
							<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" target="_blank">
								<span class="mlr-status-badge mlr-status-upgrade">
									<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
								</span>
							</a>
						</h5>
						<label for="mlr-display-gallery">
							<input type="radio" id="mlr-display-gallery" name="mlr-display-mode" value="gallery" disabled /> 
							<span>
								<?php echo esc_html__( 'Gallery', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-display-list">
							<input type="radio" id="mlr-display-list" name="mlr-display-mode" value="list" disabled /> 
							<span>
								<?php echo esc_html__( 'List', 'wp-media-recovery' ); ?>
							</span>
						</label>
					</div>

					<!-- Density Mode -->
					<div>
						<h5>
							<?php echo esc_html__( 'Density Mode', 'wp-media-recovery' ); ?>
							<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" target="_blank">
								<span class="mlr-status-badge mlr-status-upgrade">
									<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
								</span>
							</a>
						</h5>
						<label for="mlr-density-default">
							<input type="radio" id="mlr-density-default" name="mlr-density-mode" value="default" disabled /> 
							<span>
								<?php echo esc_html__( 'Default', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-density-comfortable">
							<input type="radio" id="mlr-density-comfortable" name="mlr-density-mode" value="comfortable" disabled /> 
							<span>
								<?php echo esc_html__( 'Comfortable', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-density-compact">
							<input type="radio" id="mlr-density-compact" name="mlr-density-mode" value="compact" disabled /> 
							<span>
								<?php echo esc_html__( 'Compact', 'wp-media-recovery' ); ?>
							</span>
						</label>
					</div>

					<!-- Items Per Page -->
					<div>
						<h5>
							<?php echo esc_html__( 'Items per Page', 'wp-media-recovery' ); ?>
							<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" target="_blank">
								<span class="mlr-status-badge mlr-status-upgrade">
									<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
								</span>
							</a>
						</h5>
						<label for="mlr-items-per-page-25">
							<input type="radio" id="mlr-items-per-page-25" name="mlr-items-per-page" value="25" disabled /> 
							<span>
								<?php echo esc_html__( '25', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-items-per-page-50">
							<input type="radio" id="mlr-items-per-page-50" name="mlr-items-per-page" value="50" disabled /> 
							<span>
								<?php echo esc_html__( '50', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-items-per-page-100">
							<input type="radio" id="mlr-items-per-page-100" name="mlr-items-per-page" value="100" disabled /> 
							<span>
								<?php echo esc_html__( '100', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-items-per-page-200">
							<input type="radio" id="mlr-items-per-page-200" name="mlr-items-per-page" value="200" disabled /> 
							<span>
								<?php echo esc_html__( '200', 'wp-media-recovery' ); ?>
							</span>
						</label>
					</div>

					<!-- Sort By -->
					<div>
						<h5>
							<?php echo esc_html__( 'Sort By', 'wp-media-recovery' ); ?>
							<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" target="_blank">
								<span class="mlr-status-badge mlr-status-upgrade">
									<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
								</span>
							</a>
						</h5>
						<label for="mlr-sort-by-name">
							<input type="radio" id="mlr-sort-by-name" name="mlr-sort-by" value="name" disabled /> 
							<span>
								<?php echo esc_html__( 'Name', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-sort-by-type">
							<input type="radio" id="mlr-sort-by-type" name="mlr-sort-by" value="type" disabled /> 
							<span>
								<?php echo esc_html__( 'Type', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-sort-by-size">
							<input type="radio" id="mlr-sort-by-size" name="mlr-sort-by" value="size" disabled /> 
							<span>
								<?php echo esc_html__( 'Size', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-sort-by-date-created">
							<input type="radio" id="mlr-sort-by-date-created" name="mlr-sort-by" value="created" disabled /> 
							<span>
								<?php echo esc_html__( 'Date Created', 'wp-media-recovery' ); ?>
							</span>
						</label>
					</div>

					<!-- Filter By -->
					<div>
						<h5>
							<?php echo esc_html__( 'Filter By', 'wp-media-recovery' ); ?>
							<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" target="_blank">
								<span class="mlr-status-badge mlr-status-upgrade">
									<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
								</span>
							</a>
						</h5>
						<label for="mlr-filter-by-all">
							<input type="radio" id="mlr-filter-by-all" name="mlr-filter-by" value="all" data-filter="*" disabled /> 
							<span>
								<?php echo esc_html__( 'All', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-filter-by-image">
							<input type="radio" id="mlr-filter-by-image" name="mlr-filter-by" value="image" data-filter="" disabled /> 
							<span>
								<?php echo esc_html__( 'Images', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-filter-by-audio">
							<input type="radio" id="mlr-filter-by-audio" name="mlr-filter-by" value="audio" data-filter="" disabled /> 
							<span>
								<?php echo esc_html__( 'Audio', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-filter-by-video">
							<input type="radio" id="mlr-filter-by-video" name="mlr-filter-by" value="video" data-filter="" disabled /> 
							<span>
								<?php echo esc_html__( 'Video', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-filter-by-document">
							<input type="radio" id="mlr-filter-by-document" name="mlr-filter-by" value="document" data-filter="" disabled /> 
							<span>
								<?php echo esc_html__( 'Documents', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-filter-by-spreadsheet">
							<input type="radio" id="mlr-filter-by-spreadsheet" name="mlr-filter-by" value="spreadsheet" data-filter="" disabled /> 
							<span>
								<?php echo esc_html__( 'Spreadsheets', 'wp-media-recovery' ); ?>
							</span>
						</label>
						<label for="mlr-filter-by-archive">
							<input type="radio" id="mlr-filter-by-archive" name="mlr-filter-by" value="archive" data-filter="" disabled /> 
							<span>
								<?php echo esc_html__( 'Archives', 'wp-media-recovery' ); ?>
							</span>
						</label>
					</div>

					<div>
						<p class="button-group">
							<button
								class="button button-primary"
								id="mlr-save-filters"
								name="mlr-save-filters"
								disabled
							>
								<?php echo esc_html__( 'Save', 'wp-media-recovery' ); ?>
							</button>
							<button
								class="button"
								id="mlr-reset-filters"
								name="mlr-reset-filters"
								disabled
							>
								<?php echo esc_html__( 'Reset', 'wp-media-recovery' ); ?>
							</button>
						</p>
						<small>
							<?php echo esc_html__( 'Save your explorer filters to apply and remember them.', 'wp-media-recovery' ); ?>
						</small>
					</div>
				</div>

				<!-- Background Mode -->
				<div class="mlr-explorer-background">
					<div>
						<h5>
							<?php echo esc_html__( 'Background Mode', 'wp-media-recovery' ); ?>
							<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" target="_blank">
								<span class="mlr-status-badge mlr-status-upgrade">
									<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
								</span>
							</a>
						</h5>
						<button 
							class="button button-primary" 
							id="mlr-recover-media-wpcron" 
							name="mlr-recover-media-wpcron" 
							disabled
						/>
							<?php echo esc_html__( 'Start Recovery...', 'wp-media-recovery' ); ?>
						</button>
						<small>
							<?php echo esc_html__( 'Run a background process to recover all media files from folders chosen in Options.', 'wp-media-recovery' ); ?>
						</small>
					</div>
				</div>
			</div>
			<div class="mlr-explorer-main">
				<!-- Explorer Info -->
				<!-- <div class="mlr-explorer-media-info"></div> -->

				<!-- Hide Existing Media (free-only) -->
				<p>
					<?php echo esc_html__( 'Click on any media item below to select it for recovery.', 'wp-media-recovery' ); ?>
				</p>
				<p class="mlr-hide-media">
					<label>
						<input 
							type="checkbox" 
							id="mlr-hide-existing-media"
							name="mlr-hide-existing-media" 
						/> 
						<?php echo esc_html__( 'Hide Existing Media', 'wp-media-recovery' ); ?>
					</label>
					<br />
					<small>
						* <?php echo esc_html__( 'Hide media already found on the server and in the database.', 'wp-media-recovery' ); ?>
					</small>
				</p>
				<p>
					<?php
					printf(
						wp_kses(
							/* translators: %2$s is replaced with "# of media files" */
							/* translators: %2$s is replaced with "wp-content/uploads" */
							__( 'You have a total of %1$s image files in your %2$s folder.', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
						),
						'<strong>' . number_format( $total_files, 0, 2 ) . '</strong>',
						'<code>' . esc_html__( 'wp-content/uploads', 'wp-media-recovery' ) . '</code>',
					);
					?>
				</p>

				<!-- Explorer -->
				<div class="mlr-explorer-grid">
					<?php echo $mlr->display_media_grid(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>

				<!-- Media Meta -->
				<!-- <div class="mlr-explorer-media-meta"></div> -->

				<!-- Explorer Pagination -->
				<div class="mlr-explorer-pagination">
					<div class="button-action">
						<button
							class="button button-primary button-large button-recovery"
							id="mlr-media-recovery-button"
							name="mlr-media-recovery-button"
						>
							<?php echo esc_html__( 'Media Recovery...', 'wp-media-recovery' ); ?>
						</button>
						<span></span>
					</div>
					<div class="button-group">
						<a
							class="button button-primary button-large button-pagination"
							id="mlr-prev-page-button"
							name="mlr-prev-page-button"
							href="<?php echo esc_url( $prev_page_url ); ?>"
							<?php if ( $is_first_page ) : ?>
								disabled
							<?php endif; ?>
						>
							<?php echo esc_html__( '&larr; Previous Page', 'wp-media-recovery' ); ?>
						</a>
						<a
							class="button button-primary button-large button-pagination"
							id="mlr-next-page-button"
							name="mlr-next-page-button"
							href="<?php echo esc_url( $next_page_url ); ?>"
							<?php if ( $is_last_page ) : ?>
								disabled
							<?php endif; ?>
						>
							<?php echo esc_html__( 'Next Page &rarr;', 'wp-media-recovery' ); ?>
						</a>
					</div>
				</div>
				<!-- Dashicons Legend -->
				<div class="mlr-legend">
					<p>
						<i class="dashicons dashicons-visibility"></i> 
						<?php echo esc_html__( 'Files already recovered or present on your server and in your database.', 'wp-media-recovery' ); ?>
						<br />
						<i class="dashicons dashicons-hidden"></i> 
						<?php echo esc_html__( 'Files not found in your database but available for recovery.', 'wp-media-recovery' ); ?>
						<br />
						<i class="dashicons dashicons-yes"></i> 
						<?php echo esc_html__( 'Files selected for recovery that are not found in your database.', 'wp-media-recovery' ); ?>
						<br />
						<i class="dashicons dashicons-lock"></i> 
						<?php echo esc_html__( 'Files that cannot be recovered because they exceed the limits set in Options.', 'wp-media-recovery' ); ?>
					</p>
				</div>
				<p>
					<a href="javascript:void();" class="button" onclick="window.location.reload( true );">
						<strong>Reload...</strong>
					</a>
				</p>
					<?php
					printf(
						wp_kses(
						/* translators: %1$s is replaced with "Hint" */
							__( '%1$s: Refresh the page manually if the recovery process doesn\'t complete within a few minutes.', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
						),
						'<strong>' . esc_html__( 'Hint', 'wp-media-recovery' ) . '</strong>'
					);
					?>
				</p>
				<hr />
				<p>
					<?php
					printf(
						wp_kses(
							/* translators: %1$s is replaced with "DOES NOT upload or overwrite any media on the server" */
							__( '• The plugin %1$s only scans the default uploads folder.', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
						),
						'<strong>' . esc_html__( 'DOES NOT upload or overwrite any media on the server', 'wp-media-recovery' ) . '</strong>'
					);
					?>
				</p>
				<p>
					<?php
					printf(
						wp_kses(
							__( '• The plugin lets you restore media from the uploads folder and reinsert it into the WordPress database correctly.', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
						)
					);
					?>
				</p>
				<p>
					<?php
					printf(
						wp_kses(
							/* translators: %1$s is replaced with "max_execution_time" */
							__( '• Due to your server\'s %1$s time limit, you cannot recover images larger than 2MB.', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
						),
						'<code>' . esc_html__( 'max_execution_time', 'wp-media-recovery' ) . '</code>',
					);
					?>
				</p>
				<p>
			<?php
			printf(
				wp_kses(
					__( '• You cannot duplicate or overwrite existing media files, and the plugin only supports images.', 'wp-media-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				)
			);
			?>

			</div>
		</div>
		<br clear="all" />
		<hr />
		<p>
			<?php
			printf(
				wp_kses(
					/* translators: %1$s is replaced with "Link to the website" */
					/* translators: %2$s is replaced with "Get PRO Version" */
					__( '• <a href="%1$s" target="_blank">%2$s</a> to use the full-featured media explorer with additional options and functionalities.', 'wp-media-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
				),
				esc_url( 'https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge' ),
				'<strong>' . esc_html__( 'Get the PRO Version today', 'wp-media-recovery' ) . '</strong>'
			);
			?>
			<br />
			<?php
			printf(
				wp_kses(
					/* translators: %1$s is replaced with "Reload" */
					__( '• The %1$s button will refresh the page if the recovery process gets stuck for any reason.', 'wp-media-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
				),
				'<strong>' . esc_html__( 'Reload', 'wp-media-recovery' ) . '</strong>'
			);
			?>
		</p>
	</div>
</div>
