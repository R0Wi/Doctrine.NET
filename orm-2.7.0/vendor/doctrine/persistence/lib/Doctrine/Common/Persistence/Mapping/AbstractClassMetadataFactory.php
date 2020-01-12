<?php

namespace Doctrine\Common\Persistence\Mapping;

use function class_alias;

class_alias(
    \Doctrine\Persistence\Mapping\AbstractClassMetadataFactory::class,
    __NAMESPACE__ . '\AbstractClassMetadataFactory'
);

if (false) {
    class AbstractClassMetadataFactory extends \Doctrine\Persistence\Mapping\AbstractClassMetadataFactory
    {
        /**
     * Lazy initialization of this stuff, especially the metadata driver,
     * since these are not needed at all when a metadata cache is active.
     *
     * @return void
     */
     protected function initialize(){
     
	 }

    /**
     * Gets the fully qualified class-name from the namespace alias.
     *
     * @param string $namespaceAlias
     * @param string $simpleClassName
     *
     * @return string
     */
     protected function getFqcnFromAlias($namespaceAlias, $simpleClassName){
      return "";
	 }

    /**
     * Returns the mapping driver implementation.
     *
     * @return MappingDriver
     */
     protected function getDriver(){
      return null;
	 }

    /**
     * Wakes up reflection after ClassMetadata gets unserialized from cache.
     *
     * @return void
     */
     protected function wakeupReflection(ClassMetadata $class, ReflectionService $reflService){
     
	 }

    /**
     * Initializes Reflection after ClassMetadata was constructed.
     *
     * @return void
     */
     protected function initializeReflection(ClassMetadata $class, ReflectionService $reflService){
     
	 }

    /**
     * Checks whether the class metadata is an entity.
     *
     * This method should return false for mapped superclasses or embedded classes.
     *
     * @return bool
     */
     protected function isEntity(ClassMetadata $class){
      return false;
	 }

     /**
     * Actually loads the metadata from the underlying metadata.
     *
     * @param ClassMetadata      $class
     * @param ClassMetadata|null $parent
     * @param bool               $rootEntityFound
     * @param string[]           $nonSuperclassParents All parent class names
     *                                                 that are not marked as mapped superclasses.
     *
     * @return void
     */
     protected function doLoadMetadata($class, $parent, $rootEntityFound, array $nonSuperclassParents){
     
	 }

    /**
     * Creates a new ClassMetadata instance for the given class name.
     *
     * @param string $className
     *
     * @return ClassMetadata
     */
     protected function newClassMetadataInstance($className){
      return null;
	 }
    }
}
