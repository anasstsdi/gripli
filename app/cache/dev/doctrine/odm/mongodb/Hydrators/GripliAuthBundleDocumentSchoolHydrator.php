<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class GripliAuthBundleDocumentSchoolHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="string") */
        if (isset($data['username'])) {
            $value = $data['username'];
            $return = (string) $value;
            $this->class->reflFields['username']->setValue($document, $return);
            $hydratedData['username'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['usernameCanonical'])) {
            $value = $data['usernameCanonical'];
            $return = (string) $value;
            $this->class->reflFields['usernameCanonical']->setValue($document, $return);
            $hydratedData['usernameCanonical'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['email'])) {
            $value = $data['email'];
            $return = (string) $value;
            $this->class->reflFields['email']->setValue($document, $return);
            $hydratedData['email'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['emailCanonical'])) {
            $value = $data['emailCanonical'];
            $return = (string) $value;
            $this->class->reflFields['emailCanonical']->setValue($document, $return);
            $hydratedData['emailCanonical'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['enabled'])) {
            $value = $data['enabled'];
            $return = (bool) $value;
            $this->class->reflFields['enabled']->setValue($document, $return);
            $hydratedData['enabled'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['salt'])) {
            $value = $data['salt'];
            $return = (string) $value;
            $this->class->reflFields['salt']->setValue($document, $return);
            $hydratedData['salt'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['password'])) {
            $value = $data['password'];
            $return = (string) $value;
            $this->class->reflFields['password']->setValue($document, $return);
            $hydratedData['password'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['lastLogin'])) {
            $value = $data['lastLogin'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } elseif ($value instanceof \DateTime) { $return = $value; } else { $return = new \DateTime($value); }
            $this->class->reflFields['lastLogin']->setValue($document, clone $return);
            $hydratedData['lastLogin'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['locked'])) {
            $value = $data['locked'];
            $return = (bool) $value;
            $this->class->reflFields['locked']->setValue($document, $return);
            $hydratedData['locked'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['expired'])) {
            $value = $data['expired'];
            $return = (bool) $value;
            $this->class->reflFields['expired']->setValue($document, $return);
            $hydratedData['expired'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['expiresAt'])) {
            $value = $data['expiresAt'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } elseif ($value instanceof \DateTime) { $return = $value; } else { $return = new \DateTime($value); }
            $this->class->reflFields['expiresAt']->setValue($document, clone $return);
            $hydratedData['expiresAt'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['confirmationToken'])) {
            $value = $data['confirmationToken'];
            $return = (string) $value;
            $this->class->reflFields['confirmationToken']->setValue($document, $return);
            $hydratedData['confirmationToken'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['passwordRequestedAt'])) {
            $value = $data['passwordRequestedAt'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } elseif ($value instanceof \DateTime) { $return = $value; } else { $return = new \DateTime($value); }
            $this->class->reflFields['passwordRequestedAt']->setValue($document, clone $return);
            $hydratedData['passwordRequestedAt'] = $return;
        }

        /** @Field(type="collection") */
        if (isset($data['roles'])) {
            $value = $data['roles'];
            $return = $value;
            $this->class->reflFields['roles']->setValue($document, $return);
            $hydratedData['roles'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['credentialsExpired'])) {
            $value = $data['credentialsExpired'];
            $return = (bool) $value;
            $this->class->reflFields['credentialsExpired']->setValue($document, $return);
            $hydratedData['credentialsExpired'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['credentialsExpireAt'])) {
            $value = $data['credentialsExpireAt'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } elseif ($value instanceof \DateTime) { $return = $value; } else { $return = new \DateTime($value); }
            $this->class->reflFields['credentialsExpireAt']->setValue($document, clone $return);
            $hydratedData['credentialsExpireAt'] = $return;
        }

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = $value instanceof \MongoId ? (string) $value : $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['lastname'])) {
            $value = $data['lastname'];
            $return = (string) $value;
            $this->class->reflFields['lastname']->setValue($document, $return);
            $hydratedData['lastname'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['firstname'])) {
            $value = $data['firstname'];
            $return = (string) $value;
            $this->class->reflFields['firstname']->setValue($document, $return);
            $hydratedData['firstname'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['facebookId'])) {
            $value = $data['facebookId'];
            $return = (string) $value;
            $this->class->reflFields['facebookId']->setValue($document, $return);
            $hydratedData['facebookId'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['created'])) {
            $value = $data['created'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } elseif ($value instanceof \DateTime) { $return = $value; } else { $return = new \DateTime($value); }
            $this->class->reflFields['created']->setValue($document, clone $return);
            $hydratedData['created'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['lastupdate'])) {
            $value = $data['lastupdate'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } elseif ($value instanceof \DateTime) { $return = $value; } else { $return = new \DateTime($value); }
            $this->class->reflFields['lastupdate']->setValue($document, clone $return);
            $hydratedData['lastupdate'] = $return;
        }

        /** @Many */
        $mongoData = isset($data['cv']) ? $data['cv'] : null;
        $return = new \Doctrine\ODM\MongoDB\PersistentCollection(new \Doctrine\Common\Collections\ArrayCollection(), $this->dm, $this->unitOfWork);
        $return->setHints($hints);
        $return->setOwner($document, $this->class->fieldMappings['cv']);
        $return->setInitialized(false);
        if ($mongoData) {
            $return->setMongoData($mongoData);
        }
        $this->class->reflFields['cv']->setValue($document, $return);
        $hydratedData['cv'] = $return;

        /** @Many */
        $mongoData = isset($data['type']) ? $data['type'] : null;
        $return = new \Doctrine\ODM\MongoDB\PersistentCollection(new \Doctrine\Common\Collections\ArrayCollection(), $this->dm, $this->unitOfWork);
        $return->setHints($hints);
        $return->setOwner($document, $this->class->fieldMappings['type']);
        $return->setInitialized(false);
        if ($mongoData) {
            $return->setMongoData($mongoData);
        }
        $this->class->reflFields['type']->setValue($document, $return);
        $hydratedData['type'] = $return;
        return $hydratedData;
    }
}