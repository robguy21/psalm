<?php
namespace Psalm\Test\Config\Plugin\Hook;

use Psalm\Codebase;
use Psalm\Plugin\Hook\{
    AfterAnalysisInterface
};
use Psalm\SourceControl\SourceControlInfo;
use Psalm\Type;

class AfterAnalysis implements
    AfterAnalysisInterface
{
    /**
     * Called after analysis is complete
     *
     * @param array<string, list<array{severity: string, line_from: int, line_to: int, type: string, message: string,
     * file_name: string, file_path: string, snippet: string, from: int, to: int,
     * snippet_from: int, snippet_to: int, column_from: int, column_to: int, selected_text: string}>> $issues
     *
     * @return void
     */
    public static function afterAnalysis(
        Codebase $codebase,
        array $issues,
        array $build_info,
        SourceControlInfo $source_control_info = null
    ) {
        if ($source_control_info) {
            $source_control_info->toArray();
        }
    }
}
