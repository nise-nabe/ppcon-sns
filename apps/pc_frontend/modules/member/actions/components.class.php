<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

class memberComponents extends opMemberComponents
{
  public function executeProfileListBox($request)
  {
    if ($request->hasParameter('id'))
    {
      $this->member = Doctrine::getTable('Member')->find($request->getParameter('id'));
    }
    else
    {
      $this->member = $this->getUser()->getMember();
    }
  }

  public function executeAllProfileListBox($request)
  {
    $this->members = Doctrine::getTable('Member')->findActiveMember();
  }

  public function executeAllMaleProfileListBox($request)
  {
    $members = Doctrine::getTable('Member')->findActiveMember();
    $this->members = array();
    foreach ($members as $member)
    {
      $profile = $member->getProfile('op_preset_sex');
      if (!is_null($profile) && 'Man' === $member->getProfile('op_preset_sex')->getValue())
      {
        $this->members[] = $member;
      }
    }
  }

  public function executeAllFemaleProfileListBox($request)
  {
    $members = Doctrine::getTable('Member')->findActiveMember();
    $this->members = array();
    foreach ($members as $member)
    {
      $profile = $member->getProfile('op_preset_sex');
      if (!is_null($profile) && 'Female' === $member->getProfile('op_preset_sex')->getValue())
      {
        $this->members[] = $member;
      }
    }
  }

  public function executeSmtProfileListBox($request)
  {
    if ($request->hasParameter('id'))
    {
      $this->member = Doctrine::getTable('Member')->find($request->getParameter('id'));
    }
    else
    {
      $this->member = $this->getUser()->getMember();
    }
  }

  public function executeSmtMemberFriendListBox($request)
  {
    if ($request->hasParameter('id') && 'profile' !== sfContext::getInstance()->getActionName())
    {
      $this->member = Doctrine::getTable('Member')->find($request->getParameter('id'));
    }
    else
    {
      $this->member = $this->getUser()->getMember();
    }
  }

  public function executeSmtMemberJoinCommunityListBox($request)
  {
    if ($request->hasParameter('id') && 'profile' !== sfContext::getInstance()->getActionName())
    {
      $this->member = Doctrine::getTable('Member')->find($request->getParameter('id'));
    }
    else
    {
      $this->member = $this->getUser()->getMember();
    }
  }

}
