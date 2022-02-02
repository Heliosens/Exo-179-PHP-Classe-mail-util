<?php


class MailData
{
    private string $to;
    private string $subject;
    private string $message;
    private array $headers;
    private string $param;

    public function __constructor (string $to, string $subject, string $message, array $headers = [], string $param = "") {
        $this->setTo(strip_tags(trim($to)));
        $this->setSubject(strip_tags(trim($subject)));
        $this->setMessage(strip_tags(trim($message)));
        $array = [];
        foreach ($headers as $item){
            $array[] = strip_tags(trim($item));
        }
        $this->setHeaders($array);
        $this->setParam(strip_tags(trim($param)));
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @return string
     */
    public function getParam(): string
    {
        return $this->param;
    }

    /**
     * @param string $param
     */
    public function setParam(string $param): void
    {
        $this->param = $param;
    }

    public function sendMail (){
        mail($this->getTo(), $this->getSubject(), $this->getMessage(), $this->getHeaders(), $this->getParam());
    }

}
