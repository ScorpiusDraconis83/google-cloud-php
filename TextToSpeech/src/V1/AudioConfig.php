<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts.proto

namespace Google\Cloud\TextToSpeech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description of audio data to be synthesized.
 *
 * Generated from protobuf message <code>google.cloud.texttospeech.v1.AudioConfig</code>
 */
class AudioConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The format of the audio byte stream.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.AudioEncoding audio_encoding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $audio_encoding = 0;
    /**
     * Optional. Input only. Speaking rate/speed, in the range [0.25, 4.0]. 1.0 is
     * the normal native speed supported by the specific voice. 2.0 is twice as
     * fast, and 0.5 is half as fast. If unset(0.0), defaults to the native 1.0
     * speed. Any other values < 0.25 or > 4.0 will return an error.
     *
     * Generated from protobuf field <code>double speaking_rate = 2 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $speaking_rate = 0.0;
    /**
     * Optional. Input only. Speaking pitch, in the range [-20.0, 20.0]. 20 means
     * increase 20 semitones from the original pitch. -20 means decrease 20
     * semitones from the original pitch.
     *
     * Generated from protobuf field <code>double pitch = 3 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $pitch = 0.0;
    /**
     * Optional. Input only. Volume gain (in dB) of the normal native volume
     * supported by the specific voice, in the range [-96.0, 16.0]. If unset, or
     * set to a value of 0.0 (dB), will play at normal native signal amplitude. A
     * value of -6.0 (dB) will play at approximately half the amplitude of the
     * normal native signal amplitude. A value of +6.0 (dB) will play at
     * approximately twice the amplitude of the normal native signal amplitude.
     * Strongly recommend not to exceed +10 (dB) as there's usually no effective
     * increase in loudness for any value greater than that.
     *
     * Generated from protobuf field <code>double volume_gain_db = 4 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $volume_gain_db = 0.0;
    /**
     * Optional. The synthesis sample rate (in hertz) for this audio. When this is
     * specified in SynthesizeSpeechRequest, if this is different from the voice's
     * natural sample rate, then the synthesizer will honor this request by
     * converting to the desired sample rate (which might result in worse audio
     * quality), unless the specified sample rate is not supported for the
     * encoding chosen, in which case it will fail the request and return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $sample_rate_hertz = 0;
    /**
     * Optional. Input only. An identifier which selects 'audio effects' profiles
     * that are applied on (post synthesized) text to speech. Effects are applied
     * on top of each other in the order they are given. See
     * [audio
     * profiles](https://cloud.google.com/text-to-speech/docs/audio-profiles) for
     * current supported profile ids.
     *
     * Generated from protobuf field <code>repeated string effects_profile_id = 6 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $effects_profile_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $audio_encoding
     *           Required. The format of the audio byte stream.
     *     @type float $speaking_rate
     *           Optional. Input only. Speaking rate/speed, in the range [0.25, 4.0]. 1.0 is
     *           the normal native speed supported by the specific voice. 2.0 is twice as
     *           fast, and 0.5 is half as fast. If unset(0.0), defaults to the native 1.0
     *           speed. Any other values < 0.25 or > 4.0 will return an error.
     *     @type float $pitch
     *           Optional. Input only. Speaking pitch, in the range [-20.0, 20.0]. 20 means
     *           increase 20 semitones from the original pitch. -20 means decrease 20
     *           semitones from the original pitch.
     *     @type float $volume_gain_db
     *           Optional. Input only. Volume gain (in dB) of the normal native volume
     *           supported by the specific voice, in the range [-96.0, 16.0]. If unset, or
     *           set to a value of 0.0 (dB), will play at normal native signal amplitude. A
     *           value of -6.0 (dB) will play at approximately half the amplitude of the
     *           normal native signal amplitude. A value of +6.0 (dB) will play at
     *           approximately twice the amplitude of the normal native signal amplitude.
     *           Strongly recommend not to exceed +10 (dB) as there's usually no effective
     *           increase in loudness for any value greater than that.
     *     @type int $sample_rate_hertz
     *           Optional. The synthesis sample rate (in hertz) for this audio. When this is
     *           specified in SynthesizeSpeechRequest, if this is different from the voice's
     *           natural sample rate, then the synthesizer will honor this request by
     *           converting to the desired sample rate (which might result in worse audio
     *           quality), unless the specified sample rate is not supported for the
     *           encoding chosen, in which case it will fail the request and return
     *           [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $effects_profile_id
     *           Optional. Input only. An identifier which selects 'audio effects' profiles
     *           that are applied on (post synthesized) text to speech. Effects are applied
     *           on top of each other in the order they are given. See
     *           [audio
     *           profiles](https://cloud.google.com/text-to-speech/docs/audio-profiles) for
     *           current supported profile ids.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Texttospeech\V1\CloudTts::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The format of the audio byte stream.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.AudioEncoding audio_encoding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAudioEncoding()
    {
        return $this->audio_encoding;
    }

    /**
     * Required. The format of the audio byte stream.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.AudioEncoding audio_encoding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAudioEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\TextToSpeech\V1\AudioEncoding::class);
        $this->audio_encoding = $var;

        return $this;
    }

    /**
     * Optional. Input only. Speaking rate/speed, in the range [0.25, 4.0]. 1.0 is
     * the normal native speed supported by the specific voice. 2.0 is twice as
     * fast, and 0.5 is half as fast. If unset(0.0), defaults to the native 1.0
     * speed. Any other values < 0.25 or > 4.0 will return an error.
     *
     * Generated from protobuf field <code>double speaking_rate = 2 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getSpeakingRate()
    {
        return $this->speaking_rate;
    }

    /**
     * Optional. Input only. Speaking rate/speed, in the range [0.25, 4.0]. 1.0 is
     * the normal native speed supported by the specific voice. 2.0 is twice as
     * fast, and 0.5 is half as fast. If unset(0.0), defaults to the native 1.0
     * speed. Any other values < 0.25 or > 4.0 will return an error.
     *
     * Generated from protobuf field <code>double speaking_rate = 2 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setSpeakingRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->speaking_rate = $var;

        return $this;
    }

    /**
     * Optional. Input only. Speaking pitch, in the range [-20.0, 20.0]. 20 means
     * increase 20 semitones from the original pitch. -20 means decrease 20
     * semitones from the original pitch.
     *
     * Generated from protobuf field <code>double pitch = 3 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getPitch()
    {
        return $this->pitch;
    }

    /**
     * Optional. Input only. Speaking pitch, in the range [-20.0, 20.0]. 20 means
     * increase 20 semitones from the original pitch. -20 means decrease 20
     * semitones from the original pitch.
     *
     * Generated from protobuf field <code>double pitch = 3 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setPitch($var)
    {
        GPBUtil::checkDouble($var);
        $this->pitch = $var;

        return $this;
    }

    /**
     * Optional. Input only. Volume gain (in dB) of the normal native volume
     * supported by the specific voice, in the range [-96.0, 16.0]. If unset, or
     * set to a value of 0.0 (dB), will play at normal native signal amplitude. A
     * value of -6.0 (dB) will play at approximately half the amplitude of the
     * normal native signal amplitude. A value of +6.0 (dB) will play at
     * approximately twice the amplitude of the normal native signal amplitude.
     * Strongly recommend not to exceed +10 (dB) as there's usually no effective
     * increase in loudness for any value greater than that.
     *
     * Generated from protobuf field <code>double volume_gain_db = 4 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getVolumeGainDb()
    {
        return $this->volume_gain_db;
    }

    /**
     * Optional. Input only. Volume gain (in dB) of the normal native volume
     * supported by the specific voice, in the range [-96.0, 16.0]. If unset, or
     * set to a value of 0.0 (dB), will play at normal native signal amplitude. A
     * value of -6.0 (dB) will play at approximately half the amplitude of the
     * normal native signal amplitude. A value of +6.0 (dB) will play at
     * approximately twice the amplitude of the normal native signal amplitude.
     * Strongly recommend not to exceed +10 (dB) as there's usually no effective
     * increase in loudness for any value greater than that.
     *
     * Generated from protobuf field <code>double volume_gain_db = 4 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setVolumeGainDb($var)
    {
        GPBUtil::checkDouble($var);
        $this->volume_gain_db = $var;

        return $this;
    }

    /**
     * Optional. The synthesis sample rate (in hertz) for this audio. When this is
     * specified in SynthesizeSpeechRequest, if this is different from the voice's
     * natural sample rate, then the synthesizer will honor this request by
     * converting to the desired sample rate (which might result in worse audio
     * quality), unless the specified sample rate is not supported for the
     * encoding chosen, in which case it will fail the request and return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * Optional. The synthesis sample rate (in hertz) for this audio. When this is
     * specified in SynthesizeSpeechRequest, if this is different from the voice's
     * natural sample rate, then the synthesizer will honor this request by
     * converting to the desired sample rate (which might result in worse audio
     * quality), unless the specified sample rate is not supported for the
     * encoding chosen, in which case it will fail the request and return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;

        return $this;
    }

    /**
     * Optional. Input only. An identifier which selects 'audio effects' profiles
     * that are applied on (post synthesized) text to speech. Effects are applied
     * on top of each other in the order they are given. See
     * [audio
     * profiles](https://cloud.google.com/text-to-speech/docs/audio-profiles) for
     * current supported profile ids.
     *
     * Generated from protobuf field <code>repeated string effects_profile_id = 6 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEffectsProfileId()
    {
        return $this->effects_profile_id;
    }

    /**
     * Optional. Input only. An identifier which selects 'audio effects' profiles
     * that are applied on (post synthesized) text to speech. Effects are applied
     * on top of each other in the order they are given. See
     * [audio
     * profiles](https://cloud.google.com/text-to-speech/docs/audio-profiles) for
     * current supported profile ids.
     *
     * Generated from protobuf field <code>repeated string effects_profile_id = 6 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEffectsProfileId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->effects_profile_id = $arr;

        return $this;
    }

}

