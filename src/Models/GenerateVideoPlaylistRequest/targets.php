<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetSubtitle;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The audio processing configuration. If you set this parameter to null (default), audio processing is disabled. The generated TS files do not contain audio streams.
     *
     * >  The Audio and Subtitle parameters in the same output are mutually exclusive. If the Audio parameter is configured, the Subtitle parameter is ignored. The Audio and Video parameters can be configured at the same time. You can also configure only the Audio parameter to generate only audio information.
     * @var TargetAudio
     */
    public $audio;

    /**
     * @description The playback duration of a single TS file. Unit: seconds. Default value: 10. Valid values: 5 to 15.
     *
     * @example 5
     *
     * @var float
     */
    public $duration;

    /**
     * @description The array of the durations of the pre-transcoded TS files. The array can contain the durations of up to six pre-transcoded TS files. By default, this parameter is left empty. This parameter is independent of the **Duration** parameter.
     *
     * @var float[]
     */
    public $initialSegments;

    /**
     * @description The pre-transcoding duration. Unit: seconds. Default value: 30.
     *
     *   If you set this parameter to 0, pre-transcoding is disabled.
     *   If you set this parameter to a value that is less than 0 or greater than the duration of a source video, the entire video is pre-transcoded.
     *   If you set this parameter to a value that is within the middle of the playback duration of a TS file, the transcoding continues until the end of the playback duration.
     *
     * >  This parameter is used to reduce the time spent in waiting for the initial playback of a video and improve the playback experience. If you want to replace the traditional video on demand (VOD) business scenario, you can try to pre-transcode the entire video.
     * @example 30.0
     *
     * @var float
     */
    public $initialTranscode;

    /**
     * @description The subtitle processing configuration.
     *
     * >  The Subtitle and Video or Audio parameters in the same output are mutually exclusive. You must configure the Subtitle parameter independently to generate subtitles.
     * @var TargetSubtitle
     */
    public $subtitle;

    /**
     * @description The [tags](https://help.aliyun.com/document_detail/106678.html) that you want to add to a TS file in OSS. You can use tags to manage the lifecycles of TS files in OSS.
     *
     * >  The combination of the value of the Tags parameter and the value of the Tags parameter in the upper level is used as the tag value of the current output. If the value of the Tags parameter in the current level is the same as the value of the Tags parameter in the upper level, use the value of the Tags parameter in the current level.
     * @var string[]
     */
    public $tags;

    /**
     * @description The number of TS files that are pre-transcoded when the live transcoding is triggered. By default, a 2-minute video is pre-transcoded.
     *
     *   Example: If you set the **Duration** parameter to 10, the value of the **TranscodeAhead** parameter is 12 by default. You can configure this parameter to manage the number of pre-transcoded files in an asynchronous manner. Valid values: 10 to 30.
     *
     * @example 3
     *
     * @var int
     */
    public $transcodeAhead;

    /**
     * @description The prefix of the OSS path that is used to store the live transcoding files. The live transcoding files include a M3U8 file and multiple TS files.
     *
     * The OSS path must be in the oss://${Bucket}/${Object} format. ${Bucket} specifies the name of the OSS bucket that is in the same region as the current project. ${Object} specifies the prefix of the full path of the file that does not contain the file name extension.
     *
     *   Example: If the URI is oss://test-bucket/test-object/output-video, the output-video.m3u8 file and multiple output-video-${token}-${index}.ts files are generated in the oss://test-bucket/test-object/ directory. ${token} is a unique string generated based on the transcoding parameters. The ${token} parameter is included in the response of the operation. ${index} is the serial number of the generated TS files that are numbered starting from 0.
     *
     * >  If the **MasterURI** parameter is not left empty, the URI specified by this parameter must be in the directory specified by the **MasterURI** parameter or its subdirectory.
     * @example oss://imm-test/testcases/video
     *
     * @var string
     */
    public $URI;

    /**
     * @description The video processing configuration. If you set this parameter to null (default), video processing is disabled. The generated TS files do not contain video streams.
     *
     * >  The Video and Subtitle parameters in the same output are mutually exclusive. If the Video parameter is configured, the Subtitle parameter is ignored.
     * @var TargetVideo
     */
    public $video;
    protected $_name = [
        'audio'            => 'Audio',
        'duration'         => 'Duration',
        'initialSegments'  => 'InitialSegments',
        'initialTranscode' => 'InitialTranscode',
        'subtitle'         => 'Subtitle',
        'tags'             => 'Tags',
        'transcodeAhead'   => 'TranscodeAhead',
        'URI'              => 'URI',
        'video'            => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->initialSegments) {
            $res['InitialSegments'] = $this->initialSegments;
        }
        if (null !== $this->initialTranscode) {
            $res['InitialTranscode'] = $this->initialTranscode;
        }
        if (null !== $this->subtitle) {
            $res['Subtitle'] = null !== $this->subtitle ? $this->subtitle->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->transcodeAhead) {
            $res['TranscodeAhead'] = $this->transcodeAhead;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Audio'])) {
            $model->audio = TargetAudio::fromMap($map['Audio']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InitialSegments'])) {
            if (!empty($map['InitialSegments'])) {
                $model->initialSegments = $map['InitialSegments'];
            }
        }
        if (isset($map['InitialTranscode'])) {
            $model->initialTranscode = $map['InitialTranscode'];
        }
        if (isset($map['Subtitle'])) {
            $model->subtitle = TargetSubtitle::fromMap($map['Subtitle']);
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TranscodeAhead'])) {
            $model->transcodeAhead = $map['TranscodeAhead'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['Video'])) {
            $model->video = TargetVideo::fromMap($map['Video']);
        }

        return $model;
    }
}