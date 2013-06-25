using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace FitnessTrackerLibrary
{
    enum WeightUnit
    {
        kg,
        pound
    }

    public class WeightChart
    {
        int id;
        string userName;
        double currentWeightValue;
        double targetWeightValue;
        double averageWeightValue;
        WeightUnit unit;
        DateTime assigningDate;
        DateTime targetDate;
    }

    public class FoodItem
    {
        int id;
        double caloryCount;
        double proteinCount;
        double fatCount;
        string name;
        double preferredQuantity;
        string imageUrl;
    }

    public class DietChart
    {
        int id;
        string userName;
        string trainerName;

        List<FoodItem> breakfast;
        List<FoodItem> lunch;
        List<FoodItem> dinner;
        List<FoodItem> snacks;

        double targetDailyValue;        
        
        DateTime assigningDate;
        DateTime targetDate;
    }

    enum ExerciseType
    {
        Cardio,
        Strength,
        FreeHand
    }

    public class ExerciseItem
    {
        int id;
        string name;

        ExerciseType type;

        double caloryburnt;
        int sets;
        int repetition;
        
        double preferredDuration;
        double preferredWeight;

        string imageUrl;
        string videoUrl;
        List<string> specialInstructions;
    }

    public class ExerciseChart
    {
        int id;
        string userName;
        string trainerName;

        List<ExerciseItem> exercises;
        DateTime startTime;
        DateTime duration;

        int weeklyTotalDuration;

        double targetDailyValue;

        DateTime assigningDate;
        DateTime targetDate;
    }

    public class FoodEntryDaywise
    {
        int id;        

        List<FoodItem> breakfast;
        List<FoodItem> lunch;
        List<FoodItem> dinner;
        List<FoodItem> snacks;

        double totalDailyValue;

        DateTime currentDate;
        
    }

    public class ExerciseEntryDaywise
    {
        int id;

        List<ExerciseItem> cardioExercise;
        List<ExerciseItem> strengthExercise;       

        double totalDailyCalorieBurnt;

        DateTime currentDate;
    }

    public class User
    {
        int id;
        string userName;
        string trainer;
        string fullName;
        string imageUrl;
        DateTime dob;
        double weight;

        ExerciseChart exChart;
        DietChart dietChart;

        List<ExerciseEntryDaywise> exercises;
        List<FoodEntryDaywise> foods;
    }

    public class Trainer
    {
        int id;
        string userName;
        string imageUrl;
        string websiteUrl;

        List<User> trainees;
    }

  
}
