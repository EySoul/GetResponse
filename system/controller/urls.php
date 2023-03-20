<?php

function GetDepartments()
{
    return '/api/Department/GetDepartments';
}
function DictControlAction($id = null)
{
    if($id == null)
        return '/api/DictControlAction';
    return '/api/DictControlAction/'.$id; //dictControlActionId
}
function DictDiscipline($id = null)
{
    if($id == null)
        return '/api/DictDiscipline';
    return '/api/DictDiscipline/{dictDisciplineId}'.$id; //dictDisciplineId
}
// function DictControlAction($id = null)
// {
//     if($id == null)
//         return '/api/DictDiscipline';
//     return '/api/DictDiscipline/{dictDisciplineId}'.$id; //dictDisciplineId
// }





// '/api/DictDisciplineType'
// '/api/DictDisciplineType/{dictDisciplineTypeId}'

// '/api/DictMark'
// '/api/DictMark/{dictMarkId}'

// '/api/DictQualification'
// '/api/DictQualification/{dictQualificationId}'

// '/api/DictStudyForm'
// '/api/DictStudyForm/{dictStudyFormId}'

// '/api/DictStudyFormType'
// '/api/DictStudyFormType/{dictStudyFormId}'

// '/api/DictStudyLevel'
// '/api/DictStudyLevel/{dictStudyLevelId}'

// '/api/DictStudyTechnology'
// /api/DictStudyTechnology/{dictStudyTechnologyId}

// /api/DictTrainingLevel
// /api/DictTrainingLevel/{dictTrainingLevelId}

// -------------------------

// /api/DictBenefit
// /api/DictBenefit/{id}

// /api/DictCitizenship
// /api/DictCitizenship/{citizenshipId}

// /api/DictCitizenshipType
// /api/DictCitizenshipType/{dictCitizenshipTypeId}

// /api/DictCityTypes
// /api/DictCityTypes/{dictCityTypesId}

// /api/DictEducationDocTypes
// /api/DictEducationDocTypes/{dictEducationDocTypeId}

// /api/DictEmailTypes
// /api/DictEmailTypes/{dictEmailTypesId}

// /api/DictFamilyMemberStatuses
// /api/DictFamilyMemberStatuses/{dictFamilyMemberStatusesId}

// /api/DictFilial
// /api/DictFilial/{dictFilialId}

// /api/DictHealth
// /api/DictHealth/{id}

// /api/DictIdentificationType
// /api/DictIdentificationType/{dictIdentificationTypeId}

// /api/DictInstitution
// /api/DictInstitution/{id}

// /api/DictInstitutionType
// /api/DictInstitutionType/{id}

// /api/DictLanguageLevels
// /api/DictLanguageLevels/{dictLanguageLevelsId}

// /api/DictLanguages
// /api/DictLanguages/{dictLanguagesId}

// /api/DictMaritalStatus/GetDictMaritalStatus

// /api/DictMilitaryDocTypes
// /api/DictMilitaryDocTypes/{dictMilitaryDocTypesId}

// /api/DictMilitaryRanks
// /api/DictMilitaryRanks/{dictMilitaryRanksId}

// /api/DictMilitaryStatuses
// /api/DictMilitaryStatuses/{dictMilitaryStatusesId}

// /api/DictMilitaryStockCategories
// /api/DictMilitaryStockCategories/{dictMilitaryStockCategoriesId}

// /api/DictOrdersCategory
// /api/DictOrdersCategory/{dictOrdersCategoryId}

// /api/DictOrderTypes
// /api/DictOrderTypes/{dictOrderTypesId}

// /api/DictOrganization
// /api/DictOrganization/{dictOrganizationId}

// /api/DictPhoneTypes
// /api/DictPhoneTypes/{dictPhoneTypeId}

// /api/DictSportCategory
// /api/DictSportCategory/{id}

// /api/DictSportType
// /api/DictSportType/{id}

// /api/DictSpravkaType
// /api/DictSpravkaType/{id}

// /api/DictStreetTypes
// /api/DictStreetTypes/{dictStreetTypesId}

// /api/DictStudentAcademicState
// /api/DictStudentAcademicState/{dictStudentAcademicStateId}

// /api/DictStudentBudget
// /api/DictStudentBudget/{dictStudentBudgetId}

// /api/AdditionalFields/GetAdditionalFieldsById/{id}
// /api/AdditionalFields/GetAdditionalFieldsByStudPersonId/{studPersonId}

// /api/Addresses/{addresseId}
// /api/Addresses/GetAddressesByStudPersonId/{studPersonId}

// /api/CommonDict/GetAllDictStudyLevel
// /api/CommonDict/GetAllDictTrainingLevel
// /api/CommonDict/GetAllDictStudyForm
// /api/CommonDict/GetAllDictStudyFormType


// /api/Department/GetAllDepartment
// /api/Department/GetDepartmentById/{departmentid}
// /api/Department/GetAllFaculty/{editable}
// /api/Department/GetAllDepartmentTree/{trainingLevelId}

// /api/DictAdditionalFields
// /api/DictAdditionalFields/{dictAdditionalFieldsId}
// /api/DictHostel/GetHostels

// /api/DictStudyLevel
